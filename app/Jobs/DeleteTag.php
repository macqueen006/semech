<?php

namespace App\Jobs;

use App\Models\Tag;
use App\Services\SaveImageService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;

class DeleteTag implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Tag $tag;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

//    public static function deleteRequest(Tag $tag):self
//    {
//        return new static(
//            $tag,
//        );
//
//    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): Tag
    {

        if (!is_null($this->tag->image)) {
            File::delete(storage_path('app/' . $this->tag->image));
        }
        $this->tag->delete();
        return $this->tag;
    }
}
