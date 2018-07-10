<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'photo_id',
        'title_ar',
        'title_en',
        'title_ned',
        'body_ar',
        'body_en',
        'body_ned'

    ];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
