<?php

//switch lang one
switch (Cookie::get('lang_chose')) {
    case "ara":
        $varLanguage="ar";
        break;
    case "ned":
        $varLanguage="ned";
        break;
    case "eng":
        $varLanguage="en";
        break;
    default:

        break;
}

;

//switch lang2
switch (Cookie::get('lang_chose')) {
    case "ara":
        $Language="_ar";
        break;
    case "ned":
        $Language="_ned";
        break;
    case "eng":
        $Language="";
        break;
    default:

        break;
}

;


$FilesVersion="?v=1.1";
function la($var_request ){
    if (Cookie::get('lang_chose') === null){
        $lang = 'eng';
//  echo  "\$(window).on('load',function(){\$('#likeFacebook').modal('show'); });";
    }else{
        $lang = Cookie::get('lang_chose');
//
        $number_of_visit = Cookie::get('number_of_visit');
        $number_of_visit++;
        Cookie::queue(Cookie::make('number_of_visit',$number_of_visit, 10000000));
    }
    $var_somur =  DB::table('lang')->where('var-name','=',$var_request)->first();
    $tmp = (array) $var_somur;
    $tmp =  (empty($tmp));
    if(!$tmp){
        return   $var_somur->$lang;
    }
}

function Check_lang(){
    // echo "hhh".Cookie::get('lang_chose');
    if (Cookie::get('lang_chose') === null){
        $lang = 'eng';
        echo "<script>\$(window).on('load',function(){\$('#likeFacebook').modal('show'); });</script>"  ;
    }
}

function Check_direction(){
    if (Cookie::get('lang_chose') !== null){
        if(Cookie::get('lang_chose') != 'ara'){
            $direction = "direction:ltr";
        }else{
            $direction = "direction:rtl";
        }
    } else{
        $direction = "direction:ltr";
    }
    return $direction;
}

?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" id="layerslider6home">

<!-- Mirrored from cs-aspirations.com/Contactus by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 12:03:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!--Meta Begin-->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700|Nunito:300,400,700|Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta property="fb:app_id" content="">
    <meta property="og:image" content="">
    <meta name="description" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta name="twitter:card" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="generator" content="" />
    <link rel='shortlink' href='#' />

    <link href="{{asset('assets/css/jquery.bpopup.min.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/css/hamburgers.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/css/jquery.mmenu.all.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/css/layout.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/css/bootstrap.min.css')}}{{$FilesVersion}}" rel="stylesheet" />


    <link href="{{asset('assets/layerslider/css/layerslider.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/layerslider/css/style.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/layerslider/css/showme.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/layerslider/css/km-ui.css')}}{{$FilesVersion}}" rel="stylesheet" />

    <link href="{{asset('assets/css/style_tmp.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <script src="{{asset('assets/js/jquery.js')}}{{$FilesVersion}}" type="text/javascript"></script>
    <script src="{{asset('assets/layerslider/js/greensock.js')}}{{$FilesVersion}}"></script>
    <script src="{{asset('assets/layerslider/js/layerslider.transitions.js')}}{{$FilesVersion}}"></script>
    <script src="{{asset('assets/layerslider/js/layerslider.kreaturamedia.jquery.js')}}{{$FilesVersion}}"></script>
    <link href="{{asset('assets/css/owl.carousel.min.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lazy-load.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link href="{{asset('assets/font/flaticon.css')}}{{$FilesVersion}}" rel="stylesheet" />
    <link rel='stylesheet' id='ls-google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900,400%7COpen+Sans:300,400%7CIndie+Flower:regular%7COswald:300,regular,700%7CPoppins:300,regular,500,600,700%7CYanone+Kaffeesatz:300%7CMontserrat:regular,700,900,100,200,300%7CRoboto+Slab:100,300,regular,700%7CLibre+Baskerville:regular,italic,700%7CRoboto:regular%7CRoboto+Condensed:300,regular,700:400%7CDancing+Script:regular,700%7CNunito:300,regular,200,600%7CHandlee:regular%7CPacifico:regular%7CRaleway:100,200,300,500%7CHoltwood+One+SC:regular%7CMarko+One:regular%7CCaveat:regular%7CCuprum:regular%7CSlabo+27px:regular:400%7CVarela+Round:regular%7CShadows+Into+Light+Two:regular%7CPlayfair+Display:regular,italic%7CTitillium+Web:900,regular%7CQuicksand:300,regular&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />

</head>

<body class="home page-template page-template-page-home page-template-page-home-php page page-id-5" >

<div id="page" class="mm-slideout">


    <a href="#" id="hamburger" class="Fixed" style="z-index: 10000;">
            <span class="hamburger hamburger--collapse">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </span>
    </a>
    <div id="outer-wrapper">

        <header style="display:block">
            <div class="outer">
                <div class="sizer">
                    <div class="inner">

                        <div class="navbar navbar-default navbar-static-top" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a href="{!! url('/') !!}">

                                        <img style="width: 224px    " src="{{asset('assets/img/'.la('logo').'.png')}}" />
                                    </a>
                                </div>
                                <nav class="km-ui-text-underline">
                                    <ul class="nav navbar-nav navbar-right">


                                        <li class="">
                                            <a href="{!! url('/') !!}" id="" data-toggle="" class="" role="">{{la('home')}}
                                            </a>

                                        </li>
                                        <li class="">
                                            <a href="{!! url('/about_us') !!}" id="" data-toggle="" class="" role="">{{la('about_us')}}
                                            </a>

                                        </li>
                                        <li class="">
                                            <a href="{!! url('/contact_us') !!}" id="" data-toggle="" class="" role="">{{la('contact_us')}}
                                            </a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="{!! url('/port_all') !!}" id="drop3" data-toggle="dropdown" class="dropdown-toggle" role="button">{{la('portfolio')}}
                                                <b class="caret"></b>
                                            </a>
                                            <ul role="menu" class="dropdown-menu" aria-labelledby="drop3">
                                                <li role="presentation"><a href="{!! url('/port_websites') !!}" role="menuitem">{{la('websites')}}</a></li>
                                                <li role="presentation"><a href="{!! url('/port_apps') !!}" role="menuitem">{{la('applications')}}</a></li>
                                                <li role="presentation"><a href="{!! url('/port_all') !!}" role="menuitem">{{la('all_projects')}}</a></li>
                                            </ul>

                                        </li>
                                        <li class="">
                                            <a href="{!! url('/our_blog') !!}" id="" data-toggle="" class="" role="">{{la('our_blog')}}
                                            </a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="{!! url('/host_services') !!}" id="drop5" data-toggle="dropdown" class="dropdown-toggle" role="button">{{la('hosting')}}
                                                <b class="caret"></b>
                                            </a>
                                            <ul role="menu" class="dropdown-menu" aria-labelledby="drop5">
                                                <li role="presentation"><a href="{!! url('/host_services') !!}" role="menuitem">{{la('hosting')}}</a></li>
                                                <li role="presentation"><a href="{!! url('/budget_plan') !!}" role="menuitem">{{la('budget_plan')}}</a></li>
                                                <li role="presentation"><a href="{!! url('/reseller_plan') !!}" role="menuitem">{{la('reseller_plan')}}</a></li>
                                            </ul>

                                        </li>

                                        <li class="dropdown">
                                            <a href="#" id="drop7" data-toggle="dropdown" class="dropdown-toggle" role="button">
                                                <?php
                                                $lastLang="";
                                                if(Cookie::get('lang_chose') == 'ara'){
                                                    $lastLang = "a" ;
                                                }elseif(Cookie::get('lang_chose') == 'ned'){
                                                    $lastLang = "n" ;
                                                }else{
                                                    $lastLang = "e" ;
                                                }

                                                ?>

                                                <img src="{{asset('')}}assets/img/flags/{{$lastLang}}.png" width="24"alt="1" />
                                                <b class="caret"></b>
                                            </a>
                                            <ul role="menu" class="dropdown-menu" style="width: 69px" aria-labelledby="drop7">


                                                <li><a href="{{asset('/cookiesARA')}}" ><div href="#"  id="img1" class="option"><img  src="{{asset('assets/img/flags/a.png')}}"   width="24"alt="1" /></div></a></li>
                                                <li><a href="{{asset('/cookiesENG')}}" ><div href="#"  id="img2" class="option"><img  src="{{asset('assets/img/flags/e.png')}}"   width="24"alt="2" /></div></a></li>
                                                <li><a href="{{asset('/cookiesNED')}}" ><div href="#"  id="img3" class="option"><img  src="{{asset('assets/img/flags/n.png  ')}}" width="24"alt="3" /></div></a></li>

                                            </ul>

                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <nav id="menu">
                            <ul class="listview-icons">

                                <li><a href="{!! url('/') !!}"></i>{{la('home')}}</a></li>
                                <li class="Divider"></li>

                                <li><a href="{!! url('/about_us') !!}"></i>{{la('about_us')}}</a></li>
                                <li>
                                    <span>{{la('portfolio')}}</span>
                                    <ul>
                                        <li>
                                            <span>{{la('portfolio')}}</span>
                                            <div>
                                                <p>

                                                </p>
                                                <ul>
                                                    <li><a href="{!! url('/port_websites') !!}">{{la('websites')}}</a></li>
                                                    <li><a href="{!! url('/port_apps') !!}">{{la('mobile_app')}}</a></li>
                                                    <li><a href="{!! url('/port_all') !!}">{{la('all_projects')}}</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{!! url('/our_blog') !!}">{{la('our_blog')}}</a></li>
                                <li class="Divider"></li>
                                <li>
                                    <span>{{la('hosting')}}</span>
                                    <ul>
                                        <li>
                                            <span>{{la('hosting')}}</span>
                                            <div>
                                                <p>
                                                </p>
                                                <ul>
                                                    <li><a href="{!! url('/host_services') !!}">{{la('host_services')}}</a></li>
                                                    <li><a href="{!! url('/budget-plan') !!}">{{la('budget_plan')}}</a></li>
                                                    <li><a href="{!! url('/reseller_plan') !!}">{{la('reseller_plan')}}</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{!! url('/contact_us') !!}"></i>{{la('contact_us')}}</a></li>
                                <li class="Divider"></li>





                            </ul>


                        </nav>



                    </div>
                </div>
            </div>
        </header>


