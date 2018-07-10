<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icons extends Model
{
    protected $fillable = [
        'title', 'photo_id'
    ];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
