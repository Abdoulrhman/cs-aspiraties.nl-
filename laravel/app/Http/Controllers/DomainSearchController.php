<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;

class DomainSearchController extends Controller
{
    public function domainAvailableRequest(Request $request)
    {
        $val1 = $request->input('domainRequest');   // get value from ajax
        $val2 = $request->input('domainExtention'); // get value from ajax

        $arra_domainCapitals= ['.nl','.eu','.net','.com','.be','.de'] ;



        $key = array_search($val2, $arra_domainCapitals);
         unset($arra_domainCapitals[$key]);


        $finalArray = [];
        $domain = $val1.$val2;

        if ( gethostbyname($domain) != $domain ) {
            array_push($finalArray  , [$val2, "not_available"]);
        }
        else {
            array_push($finalArray  , [$val2, "available"]);
        }





        foreach( $arra_domainCapitals as  $arra_domainCapital ){
            $domain = $val1.$arra_domainCapital;
             if ( gethostbyname($domain) != $domain ) {
                array_push($finalArray  , [$arra_domainCapital, "not_available"]);
             }
             else {
                array_push($finalArray  , [$arra_domainCapital, "available"]);
             }
        }


        return $finalArray;

    }

}
