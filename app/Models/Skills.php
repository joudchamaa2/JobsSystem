<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skills extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'skil',
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
