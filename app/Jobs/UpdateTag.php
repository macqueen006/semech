<?php

namespace App\Jobs;

use App\Http\Requests\TagStoreRequest;
use App\Models\Tag;
use App\Services\SaveImageService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UpdateTag implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $tag;
    private $name;
    private $image;
    private $description;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Tag $tag, string $name, ?string $image, string $description)
    {
        $this->tag = $tag;
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    public static function formRequest(Tag $tag, TagStoreRequest $request): self
    {
        return new static(
            $tag,
            $request->name(),
            $request->image(),
            $request->description(),
        );
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): Tag
    {
        $this->tag->update([
            'name' => $this->name,
            'description' => $this->description,
            'slug' => Str::slug($this->name),
        ]);

        if (!is_null($this->image)) {
            File::delete(storage_path('app/' . $this->tag->image));
            SaveImageService::uploadImage($this->image, $this->tag, Tag::TABLE);
        }

        return $this->tag;
    }
}
