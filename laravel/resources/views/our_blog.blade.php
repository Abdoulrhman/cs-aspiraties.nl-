@include('includes.tmp_header')


<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{la('news')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{la('news')}}</span>
                </div>
            </div>



        </div>
    </div>
</section>
<div class="clear"></div>

<section class="Blogpage">

    <div class="container">
        <div class="container">
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
                            <h2><a href="{{Request::root() }}/single_post/{{$post ->id}}">{{$post->title_en}}</a></h2>

                            <p>                               <p>{{$post->body_en}}</p>
                            </p>
                            <div class="text-center">
                                <a href="{{Request::root() }}/single_post/{{$post ->id}}" class="mainbutton">Read more</a>
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


@include('includes.tmp_footer')