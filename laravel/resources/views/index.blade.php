
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

<!-- Mirrored from cs-aspirations.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 11:57:53 GMT -->
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









<body class="home page-template page-template-page-home page-template-page-home-php page page-id-5">

<div id="page" class="mm-slideout">


    <a href="#" id="hamburger" class="Fixed" style="z-index: 10000;">
            <span class="hamburger hamburger--collapse">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </span>
    </a>


    <div id="outer-wrapper">

        <header style="">
            <div class="outer">
                <div class="sizer">
                    <div class="inner">

                        <div class="navbar navbar-default navbar-static-top" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a href="{!! url('/') !!}">

                                        <img style="width: 224px;" src="{{asset('assets/img/'.la('logo').'.png')}}" />
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


                                                <li><a href="{{asset('/cookiesARA')}}" ><div   id="img1" class="option"><img  src="{{asset('assets/img/flags/a.png')}}"   width="24"alt="1" /></div></a></li>
                                                <li><a href="{{asset('/cookiesENG')}}" ><div    id="img2" class="option"><img  src="{{asset('assets/img/flags/e.png')}}"   width="24"alt="2" /></div></a></li>
                                                <li><a href="{{asset('/cookiesNED')}}" ><div    id="img3" class="option"><img  src="{{asset('assets/img/flags/n.png  ')}}" width="24"alt="3" /></div></a></li>

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
        <main>

            <section class="slider">
                <div id="layerslider_50" class="ls-wp-container fitvidsignore" style="width:1500px;height:100vh;margin:0 auto;margin-bottom: 0px;">
                    @include('slide_one')


                    @include('slide_two')


                    @include('slide_three')


                </div>
            </section>

            <!-- Start popup -->
            <div class="wrapper">


                <div class="like-page">
                    <!-- Modal -->
                    <div class="modal fade in" id="likeFacebook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="button-like">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-bottom:10px">
                                            ✕
                                        </button>




                                        <div id="FirstContainer"  class="first-container" style=" ">
                                            <p>  <span style="font-size: 18px;">- Choose the language</span><span style="float:right; font-size: 18px;"> اختر اللغة - </span>         </p>
                                            <div class='second-container'>
                                                <div class="" style="text-align:center" >
                                                    <!-- <h4>Choose the language</h4></br> -->

                                                    <div class="con-flag"><a href="{{asset('/cookiesNED')}}"><img src="<?php echo asset('assets/img/flags/n.png')?>" width="34" style="padding-bottom:10px" alt="3"></a></div>
                                                    <div class="con-flag"><a href="{{asset('/cookiesARA')}}"><img src="<?php echo asset('assets/img/flags/a.png')?>" width="34" style="padding-bottom:10px"  alt="1"></a></div>
                                                    <div class="con-flag"><a href="{{asset('/cookiesENG')}}"><img src="<?php echo asset('assets/img/flags/e.png')?>" width="34" style="padding-bottom:10px"   alt="2"></a></div>
                                                </div> <!--   -->

                                            </div> <!-- second-container -->

                                        </div> <!-- first-container -->






                                    </div>
                                </div><!-- /.modal-body -->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>


            </div>
            <!-- End popup -->

            <section id="home-features">
                <div class="outer">
                    <div class="sizer">
                        <div class="inner">

                            <article id="feature-animations" class="clearfix right from-left red">
                                @if($title_1s)

                                    <?php
                                    $photo = DB::table('photos')->where('id','=',$title_1s[0]['attributes']['photo_id'])->first();

                                    ?>

                                    <div class="feature-list-wrapper">
                                        <div class="border"></div>
                                        <h3 data-text=".{{$title_1s[0]['attributes']['title1_'.$varLanguage]}}.">&nbsp;</h3>

                                        <h4>{{$title_1s[0]['attributes']['title2_'.$varLanguage]}}</h4>

                                        <h5>{{$title_1s[0]['attributes']['title3a_'.$varLanguage]}}</h5>
                                        <ul>
                                            <p>{{$title_1s[0]['attributes']['title3b_'.$varLanguage]}}</p>

                                        </ul>


                                        <h3 data-text=".{{$title_1s[0]['attributes']['title1_'.$varLanguage]}}."> </h3>

                                        <h5>{{$title_1s[0]['attributes']['title4a_'.$varLanguage]}}</h5>
                                        <ul>
                                            <p>{{$title_1s[0]['attributes']['title4b_'.$varLanguage]}}</p>
                                        </ul>










                                    </div><img class="feature-image" src="{{asset('uploads/'.$photo->file)}}" alt="New Animation Engine">
                                @endif
                            </article>


                        </div>
                    </div>
                </div>
            </section>


            @if(Session::has('email_sent'))

                <style>
                    .close11{
                        position: relative;
                        left: 425px;
                        top: 40px;
                        border-radius: 5px;
                        width: 90px;
                    }
                    .close{
                        position: relative;
                        top: -41px;
                        left: 35px;
                    }
                </style>
                <div class="like-page">
                    <!-- Modal -->
                    <div class="modal fade in" id="likeFacebook2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="closeBtn">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-bottom:10px">
                                            ✕
                                        </button>

                                    </div>
                                    <br><br>

                                    <div id="FirstContainer"  class="first-container" style=" ">

                                        <div class='second-container'>
                                            <p  style="    padding-top: 0px;" class="bg-success">{{session('email_sent')}}</p>
                                        </div> <!-- second-container -->
                                        <button type="button" class="close11 btn btn-success " data-dismiss="modal" aria-label="Close"  >
                                            اغلاق
                                        </button>
                                    </div> <!-- first-container -->






                                </div>
                            </div><!-- /.modal-body -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
    </div>


    cccccccc
    <script>$(window).on('load',function(){$('#likeFacebook2').modal('show'); });</script>


    @endif




    <section class="about">
        <div class="container">
            <h3>{{la('W_W_D')}}</h3>
            <div class="cherry-services">
                @if($products)

                    <?php

                    $photo1 = DB::table('photos')->where('id','=',$products[0]['attributes']['photo_id'])->first();
                    $photo2 = DB::table('photos')->where('id','=',$products[1]['attributes']['photo_id'])->first();
                    $photo3 = DB::table('photos')->where('id','=',$products[2]['attributes']['photo_id'])->first();
                    $photo4 = DB::table('photos')->where('id','=',$products[3]['attributes']['photo_id'])->first();
                    ?>
                    <div class="col-md-3">
                        <div class="services-item-inner lazy-load-box" data-delay="0" data-speed="600">

                            <img src="{{asset('uploads/' . $photo1->file)}}" />

                            <div class="feature-list-wrapper"><h5 class="services-macros"><a href="#">{{$products[0]['attributes']['title'.$Language]}}</a></h5></div>
                            <div class="content_wrap"><div class="services-macros"><p>                               <p>{{$products[0]['attributes']['body'.$Language]}}<br></p>
                                    </p></div></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-item-inner lazy-load-box" data-delay="200" data-speed="600">

                            <img src="{{asset('uploads/' . $photo2->file)}}" />

                            <div class="feature-list-wrapper"><h5 class="services-macros"><a href="#">{{$products[1]['attributes']['title'.$Language]}}</a></h5></div>
                            <div class="content_wrap"><div class="services-macros"><p>                               <p>{{$products[1]['attributes']['body'.$Language]}}<br></p>
                                    </p></div></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-item-inner lazy-load-box" data-delay="400" data-speed="600">

                            <img src="{{asset('uploads/' . $photo3->file)}}" />

                            <div class="feature-list-wrapper"><h5 class="services-macros"><a href="#">{{$products[2]['attributes']['title'.$Language]}}</a></h5></div>
                            <div class="content_wrap"><div class="services-macros"><p>                               <p>{{$products[2]['attributes']['body'.$Language]}}<br></p>
                                    </p></div></div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-item-inner lazy-load-box" data-delay="400" data-speed="600">

                            <img src="{{asset('uploads/' . $photo4->file)}}" />

                            <div class="feature-list-wrapper"><h5 class="services-macros"><a href="#">{{$products[3]['attributes']['title'.$Language]}}</a></h5></div>
                            <div class="content_wrap"><div class="services-macros"><p>                               <p>{{$products[3]['attributes']['body'.$Language]}}<br></p>
                                    </p></div></div>

                        </div>
                    </div>

                @endif

            </div>
        </div>
    </section>


    </main>.

    <div class="clear"></div>

    <div class="section-full bg-white content-inner-1 overlay-black-middle bg-img-fix dez-stats parallax" style="background-image: url({{asset('assets/img/bg1.jpg')}});">
        <div class="container">
            <div class="row">
                @if($stats)

                    <div class="col-md-3 col-sm-6">
                        <div class="stats p-a30 text-white text-center wow fadeInUp" data-wow-duration="1.50s" data-wow-delay="0.50s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="icon-md m-b20"><img src="{{asset('/uploads/'.$stats[0]['attributes']['icon'].'.png')}}" alt=""></div>
                            <div class="counter   font-26 font-weight-800 text-primary m-b5">{{$stats[0]['attributes']['num']}}</div>
                            <span class="orange">{{$stats[0]['attributes']['title'.$Language]}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats p-a30 text-white text-center wow fadeInDown" data-wow-duration="1.50s" data-wow-delay="0.50s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="icon-md m-b20"><img src="{{asset('/uploads/'.$stats[1]['attributes']['icon'].'.png')}}" alt=""></div>
                            <div class="counter   font-26 font-weight-800 text-primary m-b5">{{$stats[1]['attributes']['num']}}</div>
                            <span class="orange">{{$stats[1]['attributes']['title'.$Language]}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats p-a30 text-white text-center wow fadeInRight" data-wow-duration="1.50s" data-wow-delay="0.50s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s; animation-name: fadeInRight;">
                            <div class="icon-md m-b20"><img src="{{asset('/uploads/'.$stats[2]['attributes']['icon'].'.png')}}" alt=""></div>
                            <div class="counter   font-26 font-weight-800 text-primary m-b5">{{$stats[2]['attributes']['num']}}</div>
                            <span class="orange">{{$stats[2]['attributes']['title'.$Language]}}</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="stats p-a30 text-white text-center wow fadeInRight" data-wow-duration="1.50s" data-wow-delay="0.50s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s; animation-name: fadeInRight;">
                            <div class="icon-md m-b20"><img src="{{asset('/uploads/'.$stats[3]['attributes']['icon'].'.png')}}" alt=""></div>
                            <div class="counter   font-26 font-weight-800 text-primary m-b5">{{$stats[3]['attributes']['num']}}</div>
                            <span class="orange">{{$stats[3]['attributes']['title'.$Language]}}</span>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
    <div class="clear"></div>

    <div class="rd-tabs-wrap-nav">
        <div class="container">
            <ul class="nav-tabs tab-nav controls">

                <li class="filter active" data-filter=".category-30002">
                    <span>
                        <img src="{{asset('assets/Content/articles/2018/1/2/WbAppo_78x78.png')}}" />
                        {{la('web_app')}}
                    </span>

                </li>
                <li class="filter " data-filter=".category-30003">
                    <span>
                        <img src="{{asset('assets/Content/articles/2018/1/2/MobApp_78x78.png')}}" />
                        {{la('mobile_app')}}
                    </span>

                </li>
                <li class="filter " data-filter=".category-30004">
                    <span>
                        <img src="{{asset('assets/Content/articles/2018/1/2/SoM_78x78.png')}}" />
                        {{la('social_media')}}
                    </span>

                </li>
                <li class="filter " data-filter=".category-30005">
                    <span>
                        <img src="{{asset('assets/Content/articles/2018/1/2/SoOpmzo_78x78.png')}}" />
                        {{la('seo_op')}}
                    </span>

                </li>
                <li class="filter " data-filter=".category-30006">
                    <span>
                        <img src="{{asset('assets/Content/articles/2018/1/2/LogoDg_78x78.png')}}" />
                        {{la('logo_d')}}
                    </span>

                </li>
                <li class="filter " data-filter=".category-30007">
                    <span>
                        <img src="{{asset('assets/Content/articles/2018/1/2/WbDg_78x78.png')}}" />
                        {{la('web_design')}}
                    </span>

                </li>



            </ul>

        </div>
    </div>

    <div class="clear"></div>
    <section class="portfolio">
        <div class="container">
            <ul class="thumbnails" id="Container">


                <li class="col-md-3 col-sm-6 col-xs-12 mix category-30007">

                    @if($achievements)
                        @foreach($achievements as $achievement)

                            <div class="thumbnail Modal Modal20027 ">
                                <div class="js-thumbnail">
                                    <a class="thumb_preview" href="{!! url('/port_all') !!}">
                                        <img class="thumbnail-img" src="{{asset('')}}{{$achievement->photo ? $achievement->photo->file : 'http://placehold.it/400x400'}}" />
                                    </a>
                                </div>
                                <div class="template-data">
                                    <div class="small-prev-data">
                                        <a class="thumbnail-info" href="{!! url('/port_all') !!}">
                                            <h3 class="template-small-title">{{$achievement[0]['attributes']['title'.$Language]}}</h3>
                                            <span class="template-short-name">{{$achievement[0]['attributes']['body'.$Language]}}</span>

                                        </a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif

                </li>



                <li class="col-md-3 col-sm-6 col-xs-12 mix category-30006">

                    @if($logos)
                        @foreach($logos as $logo)

                            <div class="thumbnail Modal Modal20027 ">
                                <div class="js-thumbnail">
                                    <a class="thumb_preview" href="{!! url('/port_websites') !!}">
                                        <img class="thumbnail-img" src="{{asset('')}}{{$logo->photo ? $logo->photo->file : 'http://placehold.it/400x400'}}" />
                                    </a>
                                </div>
                                <div class="template-data">
                                    <div class="small-prev-data">
                                        <a class="thumbnail-info" href="{!! url('/port_all') !!}" >
                                            <h3 class="template-small-title">{{$logo[0]['attributes']['title'.$Language]}}</h3>
                                            <span class="template-short-name">{{$logo[0]['attributes']['body'.$Language]}}</span>

                                        </a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif

                </li>



                <li class="col-md-3 col-sm-6 col-xs-12 mix category-30005">

                    @if($seos)
                        @foreach($seos as $seo)

                            <div class="thumbnail Modal Modal20027 ">
                                <div class="js-thumbnail">
                                    <a class="thumb_preview" href="{!! url('/port_all') !!}">
                                        <img class="thumbnail-img" src="{{asset('')}}{{$seo->photo ? $seo->photo->file : 'http://placehold.it/400x400'}}" />
                                    </a>
                                </div>
                                <div class="template-data">
                                    <div class="small-prev-data">
                                        <a class="thumbnail-info" href="{!! url('/port_all') !!}">
                                            <h3 class="template-small-title">{{$seo->title.$Language}}</h3>
                                            <span class="template-short-name">{{$seo->body.$Language}}</span>

                                        </a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif

                </li>

            </ul>
            <span>

            </span>
            <div class="mainmodel20027 mainmodel">
                <img src="{{asset('assets/Content/articles/2018/1/3/wbo_400x343.jpg')}}" />
                <div class="template-data">
                    <div class="small-prev-data">

                            <span class="lefticon ">
                                <img src="{{asset('assets/Content/articles/2018/1/2/WbDg_78x78.png')}}" />
                            </span>
                        <a class="thumbnail-info">
                            <h3 class="template-small-title">
                                website one
                            </h3>
                            <span class="template-property-name">

                                </span>
                            <span class="template-short-name"> Website Design </span>
                            <span class="template-number"> #20027 </span>
                        </a>
                    </div>
                    <div class="thumbnail-data">
                        <div class="thumbnail-description"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book<br></p>
                        </div>
                        <div class="thumb-features">

                        </div>
                        <div class="list-view-btn">
                            <div class="one-btn-wrap">
                                <a href="#" class="btn-main">View Details</a>
                            </div>
                            <div class="one-btn-wrap">
                                <a target="_blank" href="#" class="js-view-product" data-tid="64833">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center btnbig">

            <a href="{!! url('/port_all') !!}" class="mainbutton">{{la('view_more')}}</a>

        </div>
    </section>

    <section class="testi">
        <div class="container">
            <h3 style="">{{la('real_cust')}} . {{la('real_rev')}}</h3>
            <div class="owl-carousel testiowl">

                <div>
                    <div class="col-md-3 text-center">
                        <img src="{{asset('assets/Content/articles/2018/1/3/MkR_260x260.jpg')}}" alt="" title="" />
                    </div>

                    <div class="col-md-9">
                        <div class="testi-right">
                            <p class="fa fa-quote-left">I was recommended to use Jardinier by my co-worker. I needed an emergency help because of insects, and they helped me to resolve this problem so quick! I’ll definitely get back again as they have so many useful services!</p>
                            <div class="testimeta">
                                <div class="ftesti">
                                    <span>Mickel Richards</span>
                                </div>
                                <span class="ltesti">
                            accountant
                            </span>
                            </div>
                        </div>

                    </div>
                </div>
                @if($testis)

                    @foreach($testis as $testi )

                        <div>
                            <div class="col-md-3 text-center">
                                <img src="{{asset('')}}{{$testi->photo ? $testi->photo->file : 'http://placehold.it/400x400'}}" alt="" title="" />
                            </div>
                            <div class="col-md-9">
                                <div class="testi-right">
                                    <p class="fa fa-quote-left">{{$testi[0]['attributes']['body'.$Language]}}</p>
                                    <div class="testimeta">

                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>
    </section>

    <div class="clear"></div>


    {{--<section class="finddomain">--}}
    {{--<div class="container">--}}

    {{----}}
    {{--</div>--}}



    {{--</section>--}}


    <div id="vpsPricing" class="post-1795  bg--img finddomain" style="background-image: url({{asset('assets/img/slider-bg-1.jpg')}});">
        <div class="container">

            <div class="row content">
                <div class="col-md-12 text-center left-content">
                    <h4 style="color: orangered;font-size: 35px; margin-top: 10px">{{$offers[0]['attributes']['title1_'.$varLanguage]}}</h4>
                    <p>{{$offers[0]['attributes']['title2_'.$varLanguage]}}</p>

                </div>
                <div class="col-md-12 right-content">


                    <form action="#" class="pure-form" method="post" id="domainSearchForm">
                        <div class="row reset-gutter">
                            <div class="col-sm-6">

                                <input class="form-control" id="DomainName" name="DomainName" type="text" placeholder=".{{la('enter_domin')}}." required="">

                            </div>
                            <div class="col-sm-3 select-box">

                                <select class="form-control" id="tld" name="tld">
                                    <option value=".com">.com</option>
                                    <option value=".net">.net</option>
                                    <option value=".org">.org</option>
                                    <option value=".info">.info</option>
                                    <option value=".us">.us</option>
                                    <option value=".eu">.eu</option>
                                </select>

                            </div>
                            <div class="col-sm-3">

                                <button class="bt btn btn-primary" type="submit">{{la('search')}}</button>

                            </div>
                        </div>
                    </form>







                </div>
            </div>


            <div class="row content">
                <div class="col-md-12 right-content">

                    <div class="row domain-ext hidden-xs">
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension">
                                <span class="name">.nl</span><span>€1/Year</span>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension">
                                <span class="name">.eu</span><span>€1.75/Year</span>

                            </a>
                        </div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension"><span class="name">.online</span><span>€2.99/Year</span></a></div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension"><span class="name">.store</span><span>€0.5/Year</span></a></div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension"><span class="name">.be</span><span>€1/Year</span></a></div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension">
                                <span class="name">.com</span><span>€6.99/Year</span>

                            </a>
                        </div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension">
                                <span class="name">.de</span><span>€2.49/Year</span>

                            </a>
                        </div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension"><span class="name">.shop</span><span>€5.99/Year</span></a></div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension"><span class="name">.website</span><span>€3.99/Year</span></a></div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension"><span class="name">.site</span><span>€
0.5/Year</span></a></div>

                        <div class="col-sm-1"     style=" padding-left: 0px;font-size: 10px">
                            <a href="#" class="extension"><span class="name">.uk</span><span>€
0.5/Year</span></a></div>
                        <div class="col-sm-1" style="padding-left: 0px; font-size: 10px">
                            <a href="#" class="extension"><span class="name">.org</span><span>€
0.5/Year</span></a></div>


                    </div>


                </div>
                <div class="col-md-12 right-content">
                    <img style="margin-top: 10px; width: 100px;height: 100px;border-radius: 50%; margin-left: 500px;" src="https://cdn.tutsplus.com/webdesign/uploads/legacy/tuts/377_loading_gif/preloader.gif" id="ajax-loader"  />

                    <div id="tableResultDomainAvailability" style="    margin-top: 20px;
    text-align: center;
    color: #333333;
    background-color:#FFF;
        border-radius: 10px;
  ">

                    </div>
                </div>

            </div>
        </div>
        <div class="ssl" style="background-color: #333; width: 100%; height: 200px; color: #ed6811;margin-bottom: 30px;">
            <div class="container">
                <h4 class="text-center" style="color: orangered;font-size: 35px;margin-top: 10px;">{{la('do_you')}}</h4>

                <br>
                <div class="row text-center">
                    <div class="col-xs-12">
                        <form action="" data-toggle="validator">
                            <div class="form-inline required">
                                <div class="form-group has-feedback">
                                    <label class="input-group">
                <span class="input-group-addon">
                <input type="radio" name="test" value="0" />
                </span>
                                        <div class="form-control form-control-static">
                                            {{la('no')}}
                                        </div>
                                        <span class="glyphicon form-control-feedback "></span>
                                    </label>
                                </div>
                                <div class="form-group has-feedback ">
                                    <label class="input-group">
                <span class="input-group-addon">
                <input type="radio" name="test" value="1" />
                </span>
                                        <div class="form-control form-control-static">
                                            {{la('yes')}}
                                        </div>
                                        <span class="glyphicon form-control-feedback "></span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="section-title">
            <h2>{{la('choose_vps')}}</h2>
        </div>
        <div class="container">
            <div class="vps-slider-holder">
                <div class="vps-ruler" data-bg-src="{{asset('assets/img/ruler.png')}}"></div>
                <div id="vpsSlider"></div>
            </div>


            <!-- VPS Slider Item Start -->
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">{{$services[1]['attributes']['title1'.$Language]}}</span>
                <span class="vps-item-feature-value vps-item-cpu"></span>
            </div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">{{$services[1]['attributes']['title2'.$Language]}}</span>
                <span class="vps-item-feature-value vps-item-cpu"></span></div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">{{$services[1]['attributes']['title3'.$Language]}}</span>
                <span class="vps-item-feature-value vps-item-cpu"></span></div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">{{$services[1]['attributes']['title4'.$Language]}}</span>
                <span class="vps-item-feature-value vps-item-cpu"></span>
            </div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">{{$services[1]['attributes']['title5'.$Language]}}</span>
                <span class="vps-item-feature-value vps-item-cpu"></span></div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">{{$services[1]['attributes']['title6'.$Language]}}</span>
                <span class="vps-item-feature-value vps-item-cpu">
            </span>
            </div>

            <!-- VPS Slider Price Tag Start -->
            <div class="vps-total-price"><span>$</span><em></em></div>
            <!-- VPS Slider Price Tag End -->
            <div class="action">
                <a href="#" class="my_popup20050_open">{{la('r_u_reseller')}}</a>
                <a href="{!! url('/host_services') !!}" class="">{{la('view_details')}}</a>

            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<section class="Blogpage">

    <div class="container">
        <h3>{{la('our_blog')}}</h3>
        <div class="col-md-9">

            <section class="blog">

                @if('$posts')
                    @foreach($posts as $post)


                        <div class="col-md-6 wow fadeInLeft " data-wow-duration="1s" data-wow-delay="0.50s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="{{asset('')}}{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive">
                                    <div class="blog-link">
                                        <a href="{{Request::root() }}/single_post/{{$post ->id}}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="date">
                                        <div class="day"><span></span>{{$post->created_at}}</div>
                                        <div class="year">2018</div>
                                    </div>
                                    <h2><a href="{{Request::root() }}/single_post/{{$post ->id}}">{{$posts[0]['attributes']['title_'.$varLanguage]}}</a></h2>

                                    <p>                               <p>{{$posts[0]['attributes']['body_'.$varLanguage]}}</p>
                                    </p>
                                    <div class="text-center">
                                        <a href="{{Request::root() }}/single_post/{{$post ->id}}" class="mainbutton">{{la('view_more')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                @endif
                <div class="clear"></div>


            </section>
        </div>
    </div>
</section>


<?php Check_lang(); ?>

<div class="map" style="border-top: 2px solid #008cb8;">
    <div id="map" class="google-map"></div>
</div>
<div class="clear"></div>

<footer>
    <section id="buynow">
        <div class="outer">
            <div class="sizer">
                <div class="inner">
                    <p><span>{{la("dont")}}</span></p>

                    <div style="display:inline-block"> <a class="button" style="{{la('direction')}}" href="{!! url('/contact_us') !!}">{{la('contact_us')}}</a></div>

                    <div style="display:inline-block"> <a class="button" style="{{la('direction')}}" href="{!! url('/about_us') !!}">{{la('about_us')}}</a></div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>

    <div class="clear"></div>
    <section id="footer" class="clearfix">
        <div class="outer">
            <div class="sizer">
                <div class="inner" data-km-ui-resize="500,800">
                    <div>
                        <h3>{{la('our_branches')}}</h3>
                        <ul>
                            <li><a href="#">{{la('holanda')}}</a></li>


                        </ul>
                    </div>
                    <div>
                        <h3>{{la('quick_links')}}</h3>
                        <ul>
                            <li><a href="{!! url('/')!!}">{{la('home')}}</a></li>
                            <li><a href="{!! url('/about_us') !!}">{{la('about_us')}}</a></li>
                            <li><a href="{!! url('/port_all') !!}">{{la('all_projects')}}</a></li>
                            <li><a href="{!! url('/our_blog') !!}">{{la('our_blog')}}</a></li>
                            <li><a href="{!! url('/contact_us')!!}">{{la('contact_us')}}</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>{{la('stay_updated')}}</h3>
                        <ul>
                            <li><a href="{!! url('/contact_us')!!}">{{la('contact_us')}}</a></li>

                            <li><a href="#">{{la('follow_fb')}}</a></li>
                            <li><a href="#">{{la('follow_tw')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="line" style="width: 100%; height: 2px; background-color: #008cb8;"></div>

    <section id="cellar">
        <div class="outer">
            <div class="sizer">
                <div class="inner">
                    <div>&copy; Copyright {{ date('Y') }}  <a><img src="{{asset('assets/img/'.la('logo').'.png')}}" class="logofooter" /></a></div>
                </div>
            </div>
        </div>
    </section>
</footer>

</div>
</div>



<div class="rightemail">
    <a class="pop1 small" data-bpopup='{"transition":"slideDown","speed":850,"easing":"easeOutBack"}'>
        <div class="insiderightemail">
            <i class="fa fa-envelope"></i>
        </div>

    </a>
</div>

<div id="popup" style="{{la('direction')}}">



    <span class="button b-close"><span>X</span></span>
    <ul>
        @foreach($errors->all() as $error)

            <li>{{$error}}</li>
        @endforeach

    </ul>

    {!! Form::open(['url' => 'emailSend','method'=>'POST', 'action'=>'ContactMessageController@store']) !!}

    <div class="form-group">

        {!! Form::label('name',  la("name")) !!}
        {!! Form::text('name', null, ['class'=>'form-control','id'=>"name"]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('email', la("email")) !!}
        {!! Form::email('email', null, ['class'=>'form-control','id'=>"email"]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('message', la("message")) !!}
        {!! Form::textarea('message', null, ['class'=>'form-control','rows'=>'6' ,'id'=>"message"]) !!}
    </div>


    <div class="form-group">
        {!! Form::submit(la("contact_us"), ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
</div>
<div class="clear"></div>



<div id="my_popup20050">

    <h4>Plan Form</h4>


    <!-- Add an optional button to close the popup -->
    <ul>
        @foreach($errors->all() as $error)

            <li>{{$error}}</li>
        @endforeach

    </ul>

    {!! Form::open(['url' => 'plan_result','method'=>'POST', 'action'=>'ContactMessageController@send']) !!}

    {!! Form::hidden('type', null, ['class'=>'form-control','value'=>"STARTER"]) !!}

    <div class="form-group">

        {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Name']) !!}
    </div>

    <div class="form-group">
        {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Email']) !!}
    </div>

    <div class="form-group">


        {!! Form::text('phone', null, ['class'=>'form-control','placeholder'=>'Phone']) !!}
    </div>



    <div class="form-group">
        <div class="form-control subpop">
            {!! Form::submit('send', ['class'=>'btn btn-primary','value'=>'send']) !!}
        </div>
    </div>

    <div class="form-group">
        <button class="my_popup20050_close">Close</button>
    </div>


    {!! Form::close() !!}
    <div class="clear"></div>
</div>

<script>

    var image = '{{asset('')}}assets/img/maps-icon.png';
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjc-t_YgDcd-GsHk4vmWB-mRI3axlOV5g"></script>

<script src="{{asset('assets/js/map.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/layerslider/js/km-ui.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/layerslider/js/script.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}{{$FilesVersion}}" type='text/javascript'></script>
<script type='text/javascript'>var LS_Meta = { "v": "6.5.7" };</script>


<script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script>
<script data-cfasync="false" type="text/javascript">/*<![CDATA[*/lsjQuery(document).ready(function () { if (typeof lsjQuery.fn.layerSlider == "undefined") { if (window._layerSlider && window._layerSlider.showNotice) { window._layerSlider.showNotice('layerslider_50', 'jquery'); } } else { lsjQuery("#layerslider_50").layerSlider({ sliderVersion: '6.5.0', type: 'fullsize', autoStart: false, globalBGColor: '#000000', globalBGAttachment: 'fixed', navPrevNext: false, hoverPrevNext: false, navStartStop: false, showCircleTimer: false, thumbnailNavigation: 'disabled', popupWidth: 640, popupHeight: 360, skinsPath: 'https://layerslider.kreaturamedia.com/wp-content/plugins/LayerSlider/static/layerslider/skins/', height: 1500 }); } });/*]]>*/</script>
<script src="{{asset('assets/layerslider/js/showme.kreaturamedia.jquery.js')}}{{$FilesVersion}}"></script>

<script src="{{asset('assets/layerslider/js/greensock-text.js')}}{{$FilesVersion}}"></script>
<script type='text/javascript'>var KM = { "isHome": "1", "page": "layerslider-responsive-wordpress-slider-plugin" };</script>

<script src="{{asset('assets/layerslider/js/wp-embed.min.js')}}"></script>

<script src="{{asset('assets/layerslider/js/layout.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/jquery.mmenu.all.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/cherry.lazy-load.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/device.min.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/jquery.mixitup.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}{{$FilesVersion}}"></script>

<script src="{{asset('assets/js/Demo.js')}}{{$FilesVersion}}"></script>

<script>
    new WOW().init();
</script>


<script>
    $(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
    });
</script>
<script>
    $('.testiowl').owlCarousel({
        loop: true,

        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 1,

            },
            1000: {
                items: 1,

            }
        }
    })
</script>
<script>
    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
</script>
<script>
    $(document).ready(function () {
        $('.mm-hasbtns').append('<img src="{{asset('assets/img/logo.png')}}" class="logomobile" />')
    });
</script>
<script>
    $(function () {
        $('#Container').mixItUp({
            load: {
                filter: '.category-1'
            }
        });
    });
</script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}{{$FilesVersion}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.count').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<script src="{{asset('assets/js/ui/widget.min.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/ui/mouse.min.js')}}{{$FilesVersion}}"></script>
<script src="{{asset('assets/js/ui/slider.min.js')}}{{$FilesVersion}}"></script>

<script src="{{asset('assets/js/jquery.bpopup.min.js')}}{{$FilesVersion}}"></script>


<div class="clear"></div>

<script>
    jQuery(function ($) {
        $('.about .services-item-inner').hover(function () {
            $(this).find('img').attr('src', function (i, src) {
                return src.replace('.png', '2.png')
            })
        }, function () {
            $(this).find('img').attr('src', function (i, src) {
                return src.replace('2.png', '.png')
            })
        })
    })
</script>
<script>

    var timeoutId;
    $(".mainmodel20027").mouseleave(function () {

        $(this).hide();
    });
    $(".Modal20027").hover(function () {
            var $offset = $(this).offset();
            var posY = ($(window).scrollTop() + 130);
            var posX = $offset.left - ($(window).scrollLeft() + 75);
            $(".mainmode20027l").addClass("nothidden");
            $(".mainmodel20027").css({
                position: "absolute",
                top: posY,
                left: posX,
            })
            if (!timeoutId) {
                timeoutId = window.setTimeout(function () {
                    timeoutId = null; // EDIT: added this line
                    $(".mainmodel20027").show();

                }, 2500);
            }
        },
        function () {
            if (timeoutId) {
                window.clearTimeout(timeoutId);
                timeoutId = null;
            }

        }

    );




</script>
<script type='text/javascript'>


    var ajaxvps = {
        "ajaxurl": "", "vpscontent":
            [



                ["{{$services[0]['attributes']['main_title'.$Language]}}", [

                    "{{$services[0]['attributes']['value1']}}",
                    "{{$services[0]['attributes']['value2']}}",
                    "{{$services[0]['attributes']['value3']}}",
                    "{{$services[0]['attributes']['value4']}}",
                    "{{$services[0]['attributes']['value5']}}",
                    "{{$services[0]['attributes']['value6']}}"

                ], "{{$services[0]['attributes']['price']}}", "#", "#", "\/m"]




                ,
                ["{{$services[1]['attributes']['main_title'.$Language]}}", [

                    "{{$services[1]['attributes']['value1']}}",
                    "{{$services[1]['attributes']['value2']}}",
                    "{{$services[1]['attributes']['value3']}}",
                    "{{$services[1]['attributes']['value4']}}",
                    "{{$services[1]['attributes']['value5']}}",
                    "{{$services[1]['attributes']['value6']}}"

                ], "{{$services[1]['attributes']['price']}}", "#", "#", "\/m"]


            ]
    };
</script>

<script>


    $('#ajax-loader').hide();


    ;
</script>

<script>

    var nameInput = document.getElementById('DomainName');  //declare the element(input) in a variable
    var nameExtention = document.getElementById('tld'); //declare the element(select) in a variable

    document.querySelector('form.pure-form').addEventListener('submit', function (e) {
        valDomainName =nameInput.value  //declare the element(input) value  in a variable
        valDomainExtention =nameExtention.value  //declare the element(select) value  in a variable
        //prevent the normal submission of the form
        e.preventDefault();
        $('#ajax-loader').show();

//
//        alert(valDomainName)

        jQuery.ajax({
            url: '{{asset('')}}/domainAvailableRequest', // Change path depending on file location
            data: {
                domainRequest: valDomainName,
                domainExtention: valDomainExtention,
                type: 'get',
//                dataType: "json",
            },
        })
            .done(function(output1) {
                console.log (output1)
                LastTable = "<table class='table'>";
                LastTable += "<thead>";
                LastTable += "<tr>";
                LastTable += "<td>";
                LastTable += "radio"
                LastTable += "</td>";
                LastTable += "<td>";
                LastTable += "Extension"
                LastTable += "</td>";

                LastTable += "<td>";
                LastTable += "Availability"
                LastTable += "</td>";
                LastTable += "</tr>";
                LastTable += "</thead>";
                seletedOrNot=0;
                chechedStatemen="";
                for (i = 0; i < output1.length; i++) {

                    if(seletedOrNot== 0 && output1[i][1]== 'available'){
                        seletedOrNot=1;
                        chechedStatemen = "checked";
                    }
                    LastTable += "<tr>";
                    LastTable += "<td>";
                    LastTable += '<input type="radio" name="seletedRadio" value="'+output1[i][0]+'" '+chechedStatemen+'> ';
                    LastTable += "</td>";
                    LastTable += "<td>";
                    LastTable += valDomainName + output1[i][0];
                    LastTable += "</td>";

                    LastTable += "<td class='"+output1[i][1]+"'>";
                    LastTable +=output1[i][1];
                    LastTable += "</td>";

                    LastTable += "</tr>";
                    chechedStatemen='';
                }
                LastTable += "</table>";
                $("#tableResultDomainAvailability").html(LastTable);
                $('#ajax-loader').hide();
            });
//        $('#ajax-loader').hide();
    });
</script>
<script>
    var $vpsPricing = $('#vpsPricing'),
        $vpsSlider = $('#vpsSlider');
    if ($vpsSlider.length) {
        var $vpsSliderHandle,
            $featureItemValue = $vpsPricing.find('.vps-item-feature-value'),
            $vpsTotalPriceChild = $vpsPricing.find('.vps-total-price span'),
            $vpsTotalPriceDur = $vpsPricing.find('.vps-total-price em'),
            $vpsOrderLink = $vpsPricing.find('a.order-link'),
            $vpsdeatilsLink = $vpsPricing.find('a.deatils-link'),
            vpsTotalPriceCur = $vpsTotalPriceChild.text();

        var changingVpsPlans = function (res, indx) {
            $vpsSliderHandle.text(res[indx][0]);

            for (var i = 0; i < res[indx][1].length; i++) {
                $featureItemValue.eq(i).text(res[indx][1][i]);
            }

            $vpsTotalPriceChild.text(vpsTotalPriceCur + res[indx][2]);
            $vpsOrderLink.attr('href', res[indx][3]);
            $vpsdeatilsLink.attr('href', res[indx][4]);
            $vpsTotalPriceDur.text(res[indx][5]);
        };

        var vpsSliderInit = function (res) {
            $vpsSlider.slider({
                animate: "fast",
                range: "min",
                min: 0,
                max: (res.length - 1),
                value: 0,
                step: 1,
                create: function (e) {
                    $vpsSliderHandle = $vpsSlider.find('.ui-slider-handle');
                    changingVpsPlans(res, '0');
                },
                slide: function (e, ui) {
                    changingVpsPlans(res, ui.value);
                }
            });
        };

        vpsSliderInit(ajaxvps.vpscontent);
    }
</script>
<script>
    $(window).on('load', function(){


        $('#img1').click(function () {

            $('#drop7').html('');
            $('#drop7').append('<img  src="{{asset('assets/img/flags/a.png')}}" width="24"alt="1" />');

        });

        $('#img2').click(function () {

            $('#drop7').html('');
            $('#drop7').append('<img  src="{{asset('assets/img/flags/e.png')}}" width="24"alt="1" />');

        });

        $('#img3').click(function () {

            $('#drop7').html('');
            $('#drop7').append('<img  src="{{asset('assets/img/flags/n.png')}}" width="24"alt="1" />');

        });


    }(jQuery));
</script>

<script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>

<script>

    $(document).ready(function () {

        // Initialize the plugin
        $('#my_popup20050').popup();

    });


    $(document).ready(function () {

        // Initialize the plugin
        $('#my_popup20049').popup();

    });


</script>
</body>

<!-- Mirrored from cs-aspirations.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 12:01:01 GMT -->
</html>











