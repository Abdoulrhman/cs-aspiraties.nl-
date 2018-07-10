<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionFour extends Model
{
    protected $fillable = [

        'title1_ar',
        'title2_ar',
        'title3_ar',
        'title4_ar',


        'title1_en',
        'title2_en',
        'title3_en',
        'title4_en',

        'title1_ned',
        'title2_ned',
        'title3_ned',
        'title4_ned',
        'photo_id'


    ];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
