<?php

namespace App\Jobs;

use App\Contracts\CommentAble;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateComment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $body;
    private ?int $parentId;
    private User $author;
    private CommentAble $commentAble;
    private ?int $depth;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $body, ?int $parentId, User $author, CommentAble $commentAble, ?int $depth)
    {
        $this->body = $body;
        $this->parentId = $parentId;
        $this->author = $author;
        $this->commentAble = $commentAble;
        $this->depth = $depth;
    }

    public static function fromRequest(CommentRequest $request): self
    {
        return new static(
            $request->body(),
            $request->parentId(),
            $request->author(),
            $request->commentAble(),
            $request->depth(),
        );
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): Comment
    {
        $comment = new Comment([
            'body' => $this->body,
            'parent_id' => $this->parentId,
            'depth' => $this->depth
        ]);
        $comment->authoredBy($this->author);
        $comment->to($this->commentAble);
        $comment->save();

        return $comment;
    }
}
