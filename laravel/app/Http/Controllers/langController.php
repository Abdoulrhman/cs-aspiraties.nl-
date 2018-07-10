<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Cookie;
use Carbon;


class langController extends Controller
{
    public function cookiesENG( ){
        $minutes=10000000;
        Cookie::queue(Cookie::make('lang_chose', 'eng', $minutes));
        // $value = Cookie::get('last_visit_date');
        Cookie::queue(Cookie::make('number_of_visit', '1', $minutes));
        Cookie::queue(Cookie::make('last_visit_date', Carbon\Carbon::now(), $minutes));
        // sleep(2);
        return redirect()->back();
        //
    }
    public function cookiesARA( ){
        $minutes=10000000;
        Cookie::queue(Cookie::make('lang_chose', 'ara', $minutes));
        Cookie::queue(Cookie::make('number_of_visit', '1', $minutes));
        Cookie::queue(Cookie::make('last_visit_date', Carbon\Carbon::now(), $minutes));
        return redirect()->back();
        //
    }
    public function cookiesNED( ){
        $minutes=10000000;
        Cookie::queue(Cookie::make('lang_chose', 'ned', $minutes));
        Cookie::queue(Cookie::make('number_of_visit', '1', $minutes));
        Cookie::queue(Cookie::make('last_visit_date', Carbon\Carbon::now(), $minutes));
        return redirect()->back();
        //
    }
}



