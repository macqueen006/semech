<?php

namespace App\Jobs;

use App\Http\Requests\TagStoreRequest;
use App\Models\Tag;
use App\Services\SaveImageService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class createTag
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $name;
    private $image;
    private $description;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $name, ?string $image, string $description)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    public static function formRequest(TagStoreRequest $request): self
    {
        return new static(
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
        $tag = new Tag([
            'name' => $this->name,
            'description' => $this->description,
            'slug' => Str::slug($this->name),
        ]);

        SaveImageService::uploadImage($this->image, $tag, Tag::TABLE);

        return $tag;
    }


}
