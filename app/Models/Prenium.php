<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prenium extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'payment_method',
    ];
    function user(){
        return $this->belongsTo(User::class);
    }
}
