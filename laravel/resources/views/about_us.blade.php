@include('includes.tmp_header')
<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{la('about_us')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{la('about_us')}}</span>
                </div>
            </div>



        </div>
    </div>
</section>

<div class="clear"></div>



<main>
    <div class="aboutus">
        <div class="container">
            <h3>
                {{la('dont_hes')}}
            </h3>
            <p class="pcontit">{{la('dont_hes')}}</p>
            <section id="home-features">


                <section class="about">
                    <div class="container">

                        <div class="cherry-services">

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

                                            <div class="feature-list-wrapper"><h5 class="services-macros"><a href="#">{{$products[0]['attributes']['title']}}</a></h5></div>
                                            <div class="content_wrap"><div class="services-macros"><p>                               <p>{{$products[0]['attributes']['body']}}<br></p>
                                                    </p></div></div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="services-item-inner lazy-load-box" data-delay="200" data-speed="600">

                                            <img src="{{asset('uploads/' . $photo2->file)}}" />

                                            <div class="feature-list-wrapper"><h5 class="services-macros"><a href="#">{{$products[1]['attributes']['title']}}</a></h5></div>
                                            <div class="content_wrap"><div class="services-macros"><p>                               <p>{{$products[1]['attributes']['body']}}<br></p>
                                                    </p></div></div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="services-item-inner lazy-load-box" data-delay="400" data-speed="600">

                                            <img src="{{asset('uploads/' . $photo3->file)}}" />

                                            <div class="feature-list-wrapper"><h5 class="services-macros"><a href="#">{{$products[2]['attributes']['title']}}</a></h5></div>
                                            <div class="content_wrap"><div class="services-macros"><p>                               <p>{{$products[2]['attributes']['body']}}<br></p>
                                                    </p></div></div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="services-item-inner lazy-load-box" data-delay="400" data-speed="600">

                                            <img src="{{asset('uploads/' . $photo4->file)}}" />

                                            <div class="feature-list-wrapper"><h5 class="services-macros"><a href="#">{{$products[3]['attributes']['title']}}</a></h5></div>
                                            <div class="content_wrap"><div class="services-macros"><p>                               <p>{{$products[3]['attributes']['body']}}<br></p>
                                                    </p></div></div>

                                        </div>
                                    </div>

                                @endif

                            </div>

                        </div>
                    </div>
                </section>
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
                                    <h3 data-text=".{{$title_1s[0]['attributes']['title1_en']}}.">&nbsp;</h3>
                                    <h4>{{$title_1s[0]['attributes']['title2_en']}}</h4>

                                    <h5>{{$title_1s[0]['attributes']['title3a_en']}}</h5>
                                    <ul>
                                       <p>{{$title_1s[0]['attributes']['title3b_en']}}</p>

                                    </ul>


                                    <h3 data-text=".{{$title_1s[0]['attributes']['title1_en']}}."> </h3>

                                    <h5>{{$title_1s[0]['attributes']['title4a_en']}}</h5>
                                    <ul>
                                  <p>{{$title_1s[0]['attributes']['title4b_en']}}</p>
                                    </ul>










                                </div><img class="feature-image" src="{{asset('uploads/'.$photo->file)}}" alt="New Animation Engine">
                            @endif
                            </article>
                            <div class="clear"></div>
                            <article class="clearfix left from-right purple">
                                @if($title_2s)

                                    <?php

                                    $photo = DB::table('photos')->where('id','=',$title_2s[0]['attributes']['photo_id'])->first();

                                    ?>
                                <img class="feature-image" src="{{asset('uploads/'.$photo->file)}}" alt="The LayerSlider Editor">
                                <div class="feature-list-wrapper">
                                    <div class="border"></div>
                                    <h3 data-text=".{{$title_2s[0]['attributes']['title1_en']}}.">&nbsp;</h3>
                                    <h4>{{$title_2s[0]['attributes']['title2_en']}}</h4>
                                    <h5>{{$title_2s[0]['attributes']['title3_en']}}</h5>
                                    <ul>
                                      <p>{{$title_2s[0]['attributes']['title4_en']}}</p>
                                    </ul>

                                </div>
                                    @endif
                            </article>
                            <div class="clear"></div>
                            <article id="feature-templates" class="right from-left orange">
                                @if($title_3s)

                                    <?php

                                    $photo = DB::table('photos')->where('id','=',$title_3s[0]['attributes']['photo_id'])->first();

                                    ?>
                                <div class="feature-list-wrapper">
                                    <div class="border"></div>
                                    <h3 data-text=".{{$title_3s[0]['attributes']['title1_en']}}.">&nbsp;</h3>
                                    <h4>{{$title_3s[0]['attributes']['title2_en']}}</h4>
                                    <h5>{{$title_3s[0]['attributes']['title3_en']}}.</h5>
                                    <ul>
                                       <p>{{$title_3s[0]['attributes']['title4_en']}}</p>
                                    </ul>

                                </div><img class="feature-image noanimate noscale" src="{{asset('assets/Content/articles/2018/1/3/PREMUMSLDERTEMPLATES.html')}}" alt="Premium templates">
                                <div class="feature-transition-wrapper noscale">
                                    <div class="keep-aspect-ratio">
                                        <div class="feature-transition">
                                            <img src="{{asset('uploads/'.$photo->file)}}" alt="Premium templates">
                                            <img src="{{asset('uploads/'.$photo->file)}}" alt="Premium templates">
                                            <img src="{{asset('uploads/'.$photo->file)}}" alt="Premium templates">
                                            <img src="{{asset('uploads/'.$photo->file)}}" alt="Premium templates">
                                            <img src="{{asset('uploads/'.$photo->file)}}" alt="Premium templates">
                                            <img src="{{asset('uploads/'.$photo->file)}}" alt="Premium templates">
                                            <img src="{{asset('uploads/'.$photo->file)}}" alt="Premium templates">
                                            <img src="{{asset('uploads/'.$photo->file)}}" alt="Premium templates">

                                        </div>
                                    </div>
                                </div>

                                    @endif
                            </article>
                            <div class="clear"></div>
                            <article id="feature-dynamic" class="left from-right blue">

                                @if($title_4s)

                                    <?php

                                    $photo = DB::table('photos')->where('id','=',$title_4s[0]['attributes']['photo_id'])->first();

                                    ?>
                                <img class="feature-image" src="{{asset('uploads/'.$photo->file)}}" alt="Dynamic Content">
                                <div class="feature-list-wrapper">
                                    <div class="border"></div>
                                    <h3 data-text=".{{$title_4s[0]['attributes']['title1_en']}}.">&nbsp;</h3>
                                    <h4>{{$title_4s[0]['attributes']['title2_en']}}</h4>
                                    <h5>{{$title_4s[0]['attributes']['title3_en']}}</h5>
                                    <ul>
                                   <p>{{$title_4s[0]['attributes']['title4_en']}}</p>
                                    </ul>

                                </div>
                                    @endif
                            </article>
                            <div class="clear"></div>
                            <article class="clearfix right from-left yellow">

                                @if($title_4s)

                                    <?php

                                    $photo = DB::table('photos')->where('id','=',$title_5s[0]['attributes']['photo_id'])->first();

                                    ?>
                                <div class="feature-list-wrapper">
                                    <div class="border"></div>
                                    <h3 data-text=".{{$title_5s[0]['attributes']['title1_en']}}.">&nbsp;</h3>
                                    <h4>{{$title_5s[0]['attributes']['title2_en']}}</h4>
                                    <h5>{{$title_5s[0]['attributes']['title3_en']}}</h5>
                                    <ul>
                                      <p>{{$title_5s[0]['attributes']['title4_en']}}</p>
                                    </ul>

                                </div><img class="feature-image" src="{{asset('uploads/'.$photo->file)}}" alt="Responsive">
                            @endif
                            </article>
                            <div class="clear"></div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>



@include('includes.tmp_footer')