<?php

namespace App\Jobs;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use App\Services\SaveImageService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class CreatePost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $title;
    private $body;
    private $image;
    private $publishedAt;
    private $author;
    private $type;
    private $photoCreditText;
    private $photoCreditLink;
    private $isCommentAble;
    private $tags;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
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

    public static function formRequest(PostRequest $request): self
    {
        return new static(
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
        $post = new Post([
            'title'             => $this->title,
            'slug'              => Str::slug($this->title),
            'body'              => $this->body,
            'type'              => $this->type,
            'photo_credit_text' => $this->photoCreditText,
            'photo_credit_link' => $this->photoCreditLink,
            'is_commentable'    => $this->isCommentAble ? false : true,
        ]);
        $post->authoredBy($this->author);
        $post->syncTags($this->tags);
        SaveImageService::uploadImage($this->image, $post, Post::TABLE);
        return $post;
    }
}
