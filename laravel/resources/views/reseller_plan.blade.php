@include('includes.tmp_header')

<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{la('hosting_s')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{la('hosting_s')}}</span>
                </div>
            </div>



        </div>
    </div>
</section>
<div class="clear"></div>


@if($services)
    <div class="clear"></div>

    <?php

    $photo = DB::table('photos')->where('id','=',$services[1]['attributes']['photo_id'])->first();
    ?>

    <main>
        <div id="services" class="post-197 ">
            <div class="container">
                <div class="row reset-gutter">
                    <div class="col-md-6">
                        <div class="service-item-content ">
                            <h2>
                                <span>{{$services[1]['attributes']['main_title']}}</span> Plan
                            </h2>




                            <div class="row">
                                <div class="col-md-6 service-feature-item">
                                    <p><i class="fa fa-check"></i>
                                          {{$services[1]['attributes']['title1']}}</p>
                                </div>
                                <div class="col-md-6 service-feature-item">
                                    <p><i class="fa fa-check"></i>
                                          {{$services[1]['attributes']['title2']}}</p>
                                </div>
                                <div class="col-md-6 service-feature-item">
                                    <p><i class="fa fa-check"></i>
                                          {{$services[1]['attributes']['title3']}}</p>
                                </div>
                                <div class="col-md-6 service-feature-item">
                                    <p><i class="fa fa-check"></i>
                                          {{$services[1]['attributes']['title4']}}</p>
                                </div>
                                <div class="col-md-6 service-feature-item">
                                    <p><i class="fa fa-check"></i>
                                          {{$services[1]['attributes']['title5']}}</p>
                                </div>
                                <div class="col-md-6 service-feature-item">
                                    <p><i class="fa fa-check"></i>
                                          {{$services[1]['attributes']['title6']}}</p>
                                </div>
                            </div>




                            <div class="price">
                                <p>
                                    starting form
                                    <span>
                                                {{$services[1]['attributes']['price']}}<em>
                                                    /month
                                                </em>
                                            </span>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item-img">
                            <img class="img-responsive" src="{{asset('uploads/' . $photo->file)}}" alt="01 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pricingTable">
            <div class="container">
                <div class="row reset-margin">
                    <div class="col-md-3 col-sm-6 pricing-table-item mt-md">
                        <div class="pt-body">
                            <div class="pt-features pt2-left-header">
                                <ul class="text-left">
                                    <li>{{$services[1]['attributes']['title1']}}</li>
                                    <li>{{$services[1]['attributes']['title2']}}</li>
                                    <li>{{$services[1]['attributes']['title3']}}</li>
                                    <li>{{$services[1]['attributes']['title4']}}</li>
                                    <li>{{$services[1]['attributes']['title5']}}</li>
                                    <li>{{$services[1]['attributes']['title6']}}</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 pricing-table-item">
                        <div class="pt-body">
                            <div class="pt-plan text-center">{{$services[1]['attributes']['main_title']}}</div>
                            <div class="pt-features">
                                <ul>
                                    <li>{{$services[0]['attributes']['value1']}}</li>
                                    <li>{{$services[0]['attributes']['value2']}}</li>
                                    <li>{{$services[0]['attributes']['value3']}}</li>
                                    <li>{{$services[0]['attributes']['value4']}}</li>
                                    <li>{{$services[0]['attributes']['value5']}}</li>
                                    <li>{{$services[0]['attributes']['value6']}}</li>

                                </ul>
                            </div>
                        </div>
                        <div class="pt-footer">
                            <a  class="btn btn-custom my_popup20050_open">Buy Now</a>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-6 pricing-table-item">
                        <div class="pt-body">
                            <div class="pt-plan text-center">{{$services[1]['attributes']['main_title']}}</div>
                            <div class="pt-features">
                                <ul>
                                    <li>{{$services[1]['attributes']['value1']}}</li>
                                    <li>{{$services[1]['attributes']['value2']}}</li>
                                    <li>{{$services[1]['attributes']['value3']}}</li>
                                    <li>{{$services[1]['attributes']['value4']}}</li>
                                    <li>{{$services[1]['attributes']['value5']}}</li>
                                    <li>{{$services[1]['attributes']['value6']}}</li>

                                </ul>
                            </div>
                        </div><div class="pt-footer">
                            <a  class="btn btn-custom my_popup20049_open">Buy Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <div class="clear"></div>
@endif
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


</div>
<div id="my_popup20049">

    <h4>Plan Form</h4>



    <!-- Add an optional button to close the popup -->
    <ul>
        @foreach($errors->all() as $error)

            <li>{{$error}}</li>
        @endforeach

    </ul>

    {!! Form::open(['url' => 'plan_result','method'=>'POST', 'action'=>'ContactMessageController@send']) !!}

    {!! Form::hidden('type', null, ['class'=>'form-control','value'=>"Basic"]) !!}

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

</div>


@include('includes.tmp_footer')
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
