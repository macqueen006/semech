<?php

namespace App\Jobs;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
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


class UpdatePost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Post $post;
    private string $title;
    private string $body;
    private ?string $image;
    private string $publishedAt;
    private User $author;
    private string $type;
    private ?string $photoCreditText;
    private ?string $photoCreditLink;
    private bool $isCommentAble;
    private array $tags;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        Post $post,
        string $title,
        string $body,
        ?string $image,
        string $publishedAt,
        User $author,
        string $type,
        ?string $photoCreditText,
        ?string $photoCreditLink,
        bool $isCommentAble,
        array $tags = []
    )
    {
        $this->post = $post;
        $this->title = $title;
        $this->body = $body;
        $this->image = $image;
        $this->publishedAt = $publishedAt;
        $this->author = $author;
        $this->type = $type;
        $this->photoCreditText = $photoCreditText;
        $this->photoCreditLink = $photoCreditLink;
        $this->isCommentAble = $isCommentAble;
        $this->tags = $tags;
    }

    public static function formRequest(Post $post, PostRequest $request): self
    {
        return new static(
            $post,
            $request->title(),
            $request->body(),
            $request->image(),
            $request->publishedAt(),
            $request->author(),
            $request->type(),
            $request->photoCreditText(),
            $request->photoCreditLink(),
            $request->isCommentAble(),
            $request->tags(),
        );
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public
    function handle(): Post
    {
        $this->post->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'body' => $this->body,
            'type' => $this->type,
            'photo_credit_text' => $this->photoCreditText,
            'photo_credit_link' => $this->photoCreditLink,
            'is_commentable' => $this->isCommentAble ? false : true,
        ]);

        $this->post->syncTags($this->tags);
        if (!is_null($this->image)) {
            File::delete(storage_path('app/' . $this->post->image));
            SaveImageService::uploadImage($this->image, $this->post, Post::TABLE);
        }
        return $this->post;
    }
}
