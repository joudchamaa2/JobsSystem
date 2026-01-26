<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejobs extends Model
{
    protected $fillable = [
        'title',
        'company_name',
        'location',
        'job_type',
        'salary',
        'description',
        'skills',
    ];
    function users(){
        return $this->belongsToMany(User::class,'ejob_user','ejob_id','user_id');
    }
    function applications(){
        return $this->hasMany(Application::class);
    }
}
