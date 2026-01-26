<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Skill;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image',
        'about',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function posts(): HasMany{
        return $this->hasMany(Post::class);
    }
    public function Comment(): HasMany{
        return $this->hasMany(Comment::class);
    }
    public function skills(): HasMany{
        return $this->hasMany(Skill::class);
    }
    public function jobs (){
        return $this->belongsToMany(Ejobs::class,'ejob_user','user_id','ejob_id');
    }
    public function applications(): HasMany{
        return $this->hasMany(Application::class);
    }
    public function prenium(): HasOne{
        return $this->hasOne(Prenium::class);
    }
    public function likes() :HasMany{
        return $this->hasMany(Like::class);
    }
}
