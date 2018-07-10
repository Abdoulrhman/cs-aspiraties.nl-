<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testi extends Model
{
    protected $fillable = [
        'photo_id',
        'body'

    ];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
