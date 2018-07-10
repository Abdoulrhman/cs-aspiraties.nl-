@include('includes.tmp_header')

<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{la('portfolio')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{la('portfolio')}}</span>
                </div>
            </div>



        </div>
    </div>
</section>
<div class="clear"></div>
<section class="websites">
    <div class="container">
        <div class="col-md-8">

            <div class="page search-page">
                <div class="page-heading">

                </div>
            </div>
            <section class="portfolio innerportfolio">

                <ul class="thumbnails" id="Container">

                        @if($logos)
                        @foreach($logos as $logo)

                            <li class="col-md-4 col-sm-6 col-xs-12 lazy-load-box" data-delay="600" data-speed="800">
                                <div class="thumbnail Modal ">
                                    <div class="js-thumbnail">
                                        <a class="thumb_preview" href="#">
                                            <img class="thumbnail-img" src="{{asset('')}}{{$logo->photo ? $logo->photo->file : 'http://placehold.it/400x400'}}" />
                                        </a>
                                    </div>
                                    <div class="template-data">
                                        <div class="small-prev-data">
                                            <a class="thumbnail-info" href="#">
                                                <h3 class="template-small-title">{{$logo->title}}</h3>
                                                <span class="template-short-name">{{$logo->body}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        @endforeach
                    @endif

                           @if($achievements)
                                @foreach($achievements as $achievement)

                                    <li class="col-md-4 col-sm-6 col-xs-12 lazy-load-box" data-delay="600" data-speed="800">
                                        <div class="thumbnail Modal ">
                                            <div class="js-thumbnail">
                                                <a class="thumb_preview" href="#">
                                                    <img class="thumbnail-img" src="{{asset('')}}{{$achievement->photo ? $achievement->photo->file : 'http://placehold.it/400x400'}}" />
                                                </a>
                                            </div>
                                            <div class="template-data">
                                                <div class="small-prev-data">
                                                    <a class="thumbnail-info" href="#">
                                                        <h3 class="template-small-title">{{$achievement->title}}</h3>
                                                        <span class="template-short-name">{{$achievement->body}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                @endforeach
                            @endif

                            @if($mobiles)
                                @foreach($mobiles as $mobile)

                                    <li class="col-md-4 col-sm-6 col-xs-12 lazy-load-box" data-delay="600" data-speed="800">
                                        <div class="thumbnail Modal ">
                                            <div class="js-thumbnail">
                                                <a class="thumb_preview" href="{!! url('/') !!}">
                                                    <img class="thumbnail-img" src="{{$mobile->photo ? $mobile->photo->file : 'http://placehold.it/400x400'}}" />
                                                </a>
                                            </div>
                                            <div class="template-data">
                                                <div class="small-prev-data">
                                                    <a class="thumbnail-info" href="{!! url('/') !!}">
                                                        <h3 class="template-small-title">{{$mobile->title}}</h3>
                                                        <span class="template-short-name">{{$mobile->body}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                @endforeach
                            @endif

                            @if($seos)
                                @foreach($seos as $seo)

                                    <li class="col-md-4 col-sm-6 col-xs-12 lazy-load-box" data-delay="600" data-speed="800">
                                        <div class="thumbnail Modal ">
                                            <div class="js-thumbnail">
                                                <a class="thumb_preview" href="{!! url('/') !!}">
                                                    <img class="thumbnail-img" src="{{$seo->photo ? $seo->photo->file : 'http://placehold.it/400x400'}}" />
                                                </a>
                                            </div>
                                            <div class="template-data">
                                                <div class="small-prev-data">
                                                    <a class="thumbnail-info" href="{!! url('/') !!}">
                                                        <h3 class="template-small-title">{{$seo->title}}</h3>
                                                        <span class="template-short-name">{{$seo->body}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                @endforeach
                            @endif

                            @if($apps)
                                @foreach($apps as $app)

                                    <li class="col-md-4 col-sm-6 col-xs-12 lazy-load-box" data-delay="600" data-speed="800">
                                        <div class="thumbnail Modal ">
                                            <div class="js-thumbnail">
                                                <a class="thumb_preview" href="{!! url('/') !!}">
                                                    <img class="thumbnail-img" src="{{$app->photo ? $app->photo->file : 'http://placehold.it/400x400'}}" />
                                                </a>
                                            </div>
                                            <div class="template-data">
                                                <div class="small-prev-data">
                                                    <a class="thumbnail-info" href="{!! url('/') !!}">
                                                        <h3 class="template-small-title">{{$app->title}}</h3>
                                                        <span class="template-short-name">{{$app->body}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                @endforeach
                            @endif

                            @if($socials)
                                @foreach($socials as $social)

                                    <li class="col-md-4 col-sm-6 col-xs-12 lazy-load-box" data-delay="600" data-speed="800">
                                        <div class="thumbnail Modal ">
                                            <div class="js-thumbnail">
                                                <a class="thumb_preview" href="{!! url('/') !!}">
                                                    <img class="thumbnail-img" src="{{$social->photo ? $social->photo->file : 'http://placehold.it/400x400'}}" />
                                                </a>
                                            </div>
                                            <div class="template-data">
                                                <div class="small-prev-data">
                                                    <a class="thumbnail-info" href="{!! url('/') !!}">
                                                        <h3 class="template-small-title">{{$social->title}}</h3>
                                                        <span class="template-short-name">{{$social->body}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                @endforeach
                            @endif

                </ul>



            </section>
        </div>
    </div>
</section>
<div class="clear"></div>


@include('includes.tmp_footer')