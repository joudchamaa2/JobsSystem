<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function ImagePost(){
        return $this->hasMany(ImagePost::class);
    }
    public function Comment(){
        return $this->hasMany(Comment::class);
    }
}
