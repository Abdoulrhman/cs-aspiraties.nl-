@include('includes.tmp_header')


<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{la('contact_us')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{la('contact_us')}}</span>
                </div>
            </div>



        </div>
    </div>
</section>

<div class="clear"></div>



<section class="ourcontact">
    <div class="container marb40">
        <h3>
            {{la('dont_hes')}}

        </h3>
        <p class="pcontit">{{la('dont_hes')}}
        </p>
        <div class="col-md-4">
            <div class="vc_column-inner">
                <div class="vc_message_box vc_message_box-3d">
                    <div class="vc_message_box-icon">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <h4>{{la('call_us')}}</h4>
                    <p>Phone: 555-748-6051</p>
                    <p>Mobile: 555-748-6051
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="vc_column-inner">
                <div class="vc_message_box vc_message_box-3d">
                    <div class="vc_message_box-icon">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <h4>{{la('visit_our')}}</h4>
                    <p>{{la('in')}}</p>
                    <p>{{la('holanda')}} </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="vc_column-inner">
                <div class="vc_message_box vc_message_box-3d">
                    <div class="vc_message_box-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <h4>{{la('email')}}</h4>
                    <p>info@aspirations.com</p>
                    <p>Skype: salesaspirations.chat
                    </p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="formatcontact">
        <div class="container">
            <div class="text-center space40 mart70">
                <h3 class="text-uppercase">{{la('send_us')}}</h3>
                <p class="pcontit"> {{la('we_will')}}
                </p>

            </div>



            {!! Form::open(['url' => 'index','method'=>'POST','id'=>'contactform', 'class'=>'contact-form positioned', 'action'=>'ContactMessageController@store']) !!}
            <fieldset>
                <div class="row">
                    <div class="col-sm-6">
            <div class="form-group">


                {!! Form::text('name', null, ['class'=>'form-control','id'=>"name",'placeholder'=>'Name']) !!}
            </div>
                    </div>

                    <div class="col-sm-6">
            <div class="form-group">

                {!! Form::email('email', null, ['class'=>'form-control','id'=>"email",'placeholder'=>'Email']) !!}
            </div>
                    </div>
            <div class="form-group">


                {!! Form::textarea('message', null, ['class'=>'form-control','rows'=>'6' ,'id'=>"message",'placeholder'=>'Message']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Contact Us', ['class'=>'btn btn-primary']) !!}
            </div>
                </div>
            </fieldset>
            {!! Form::close() !!}



        </div>
    </div>

</section>

@include('includes.tmp_footer')