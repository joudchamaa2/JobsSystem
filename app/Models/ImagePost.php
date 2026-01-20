<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagePost extends Model
{
    protected $fillable = [
        'path',
        'post_id',
    ];
    public function Posts(){
        return $this->belongsTo(Post::class);
    }
}
