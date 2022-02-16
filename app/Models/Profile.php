<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    const TABLE = 'profiles';
    protected $table = self::TABLE;

    protected $fillable = [
        'bio',
        'facebook',
        'instagram',
        'twitter',
        'linkedin'
    ];

    //This is the one to one relationship
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
