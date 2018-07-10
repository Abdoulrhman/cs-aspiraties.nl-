<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'photo_id',
        'title',
        'body'

    ];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
