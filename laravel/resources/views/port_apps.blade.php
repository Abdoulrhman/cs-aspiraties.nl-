@include('includes.tmp_header')

<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{la('m_a')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{la('m_a')}}</span>
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
                </ul>



            </section>
        </div>
    </div>
</section>
<div class="clear"></div>


@include('includes.tmp_footer')