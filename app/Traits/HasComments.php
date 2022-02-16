<?php

namespace App\Traits;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasComments
{
    public function comments()
    {
        return $this->commentsRelation;
    }

    public function commentsRelation(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentsRelation', 'commentable_type', 'commentable_id')
            ->whereNull('parent_id');
    }

    public function latestComments(int $limit = 5)
    {
        return $this->commentsRelation()->latest()->limit($limit)->get();
    }

    public function deleteComments()
    {
        foreach ($this->commentsRelation()->get() as $comment) {
            $comment->delete();
        }
        $this->unsetRelation('commentRelation');
    }
}
