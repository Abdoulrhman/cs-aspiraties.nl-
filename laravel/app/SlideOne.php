<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideOne extends Model
{
    protected $fillable = [
        'photo_id',
        'title'

    ];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
