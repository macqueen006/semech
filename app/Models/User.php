<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Laravelista\Comments\Commenter;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Commenter;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    const TABLE = 'users';
    protected $table = self::TABLE;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function id()
    {
        return $this->id;
    }

    public function joinedDate()
    {
        return $this->created_at->format('M/d/y');
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function isSuperAdmin()
    {
        return $this->hasRole('super-admin');
    }

    //one to one relationship with profile
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    //social
    public function bioProfile()
    {
        return $this->profile->bio();
    }

    public function bioProfileExcerpt($limit = 80)
    {
        return Str::limit($this->bioProfile(), $limit);
    }

    public function facebookProfile()
    {
        return $this->profile->facebook();
    }

    public function twitterProfile()
    {
        return $this->profile->twitter();
    }

    public function instagramProfile()
    {
        return $this->profile->instagram();
    }

    public function linkedInProfile()
    {
        return $this->profile->linkedIn();
    }
}
