<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'photo_id', 'title', 'body','title_ar','body_ar','title_nld','body_nld'
];


    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
