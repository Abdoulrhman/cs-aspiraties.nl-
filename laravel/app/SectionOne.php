<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionOne extends Model
{
    protected $fillable = [
        'title1_ar',
        'title2_ar',
        'title3a_ar',
        'title3b_ar',
        'title4a_ar',
        'title4b_ar',

        'title1_en',
        'title2_en',
        'title3a_en',
        'title3b_en',
        'title4a_en',
        'title4b_en',

        'title1_ned',
        'title2_ned',
        'title3a_ned',
        'title3b_ned',
        'title4a_ned',
        'title4b_ned',
        'photo_id'


    ];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
