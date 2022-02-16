<?php

namespace App\Models;

use App\Casts\TitleCast;
use App\Traits\HasAuthor;
use App\Traits\HasComments;
use App\Traits\HasTags;
use App\Traits\Search;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use HasFactory;
    use HasAuthor;
    use HasTags;
    use Commentable;
    use Search;

    protected $searchable = [
        'title',
        'slug',
    ];

    const TABLE = 'posts';

    protected $table = self::TABLE;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'author_id',
        'image',
        'published_at',
        'type',
        'photo_credit_text',
        'photo_credit_link',
        'is_commentable'
    ];

    //for Eager loading
    protected $with = [
        'authorRelation',
        'tagsRelation'
    ];

    //cast to a carbon instance once we retrieve the data
    protected $casts = [
        'published_at' => 'datetime',
        'title' => TitleCast::class,
        'is_commentable' => 'boolean'
    ];


    public function excerpt(int $limit = 250): string
    {
        return Str::limit(strip_tags($this->body), $limit);
    }

    public function image()
    {
        return $this->image;
    }

    public function delete()
    {
        $this->removeTags();
        parent::delete();
    }

    public function title()
    {
        return $this->title;
    }

    public function commentAbleTitle(): string
    {
        return $this->title();
        //this title is from the contract
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function isCommentAble()
    {
        return $this->is_commentable;
    }

    public function scopeLoadLatest(Builder $query, $search, $count = 4)
    {

        return $query->when($search, function ($post) use($search) {
            return $post->where('title', 'like', "%$search%");
        })->latest()
            ->paginate($count);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', new \DateTime());
    }

    public function scopeForTag(Builder $query, string $tag): Builder
    {
        return $query->published()
            ->whereHas('tagsRelation', function ($query) use ($tag) {
                $query->where('tags.slug', $tag);
            });
    }

    public function readTime()
    {
        $minutes = round(str_word_count(strip_tags($this->body())) / 200);

        return $minutes == 0 ? 1 : $minutes;
    }

}
