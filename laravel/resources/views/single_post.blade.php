@include('includes.tmp_header')

<section class="maininner" style="background-image: url({{asset('assets')}}/img/bg-image-4.jpg);">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{$post->title_ar}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') .!!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{$post->title_ar}}</span>
                </div>
            </div>



        </div>
    </div>
</section>
<div class="clear"></div>
<section class="Blogpage">

    <div class="container">
        <div class="col-md-9">
            <article>
                <h3 class="entry-title">{{$post->title_ar}}</h3>

                <div class="entry-meta">
                    <span class="post_date"><a href="#" class="post_date-link"><time datetime="2016-07-12T06:03:02+00:00">{{$post->created_at}}</time></a></span>

                </div>
                <figure class="post-thumbnail">
                    <img class="post-thumbnail__img wp-post-image" src="{{asset('')}}{{$post->photo->file}}" alt="Basic Dental Care 101">
                </figure>
                <div class="entry-content">
{{$post->body_ar}}

                </div>

            </article>

        </div>
    </div>
</section>


@include('includes.tmp_footer')