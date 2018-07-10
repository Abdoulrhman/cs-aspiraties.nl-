@include('includes.tmp_header')


<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{la('w_d')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{la('w_d')}}</span>
                </div>
            </div>



        </div>
    </div>
</section>

<div class="clear"></div>

<section class="websites">
    <div class="container">

        <div class="col-md-9">
            <div class="page search-page">
                <div class="page-heading">

                </div>
            </div>



            <section class="portfolio innerportfolio">

                <ul class="thumbnails" id="Container">
                    <li class="col-md-4 col-sm-6 col-xs-12 lazy-load-box" data-delay="600" data-speed="800">
                        <div class="thumbnail Modal ">
                            <div class="js-thumbnail">
                                <a class="thumb_preview" href="#">
                                    <img class="thumbnail-img" src="{{asset('assets/Content/articles/2018/1/3/wbo_400x343.jpg')}}" />
                                </a>
                            </div>
                            <div class="template-data">
                                <div class="small-prev-data">
                                    <a class="thumbnail-info" href="#">
                                        <h3 class="template-small-title">website one</h3>
                                        <span class="template-short-name">Website Design</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>



            </section>


        </div>
    </div>
</section>

<div class="clear"></div>
@include('includes.tmp_footer')