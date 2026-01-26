<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id',
        'ejob_id',
        'full_name',
        'email',
        'cv',
        'cover_letter',
        'additional_info',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function ejob(){
        return $this->belongsTo(Ejobs::class);
    }
}
