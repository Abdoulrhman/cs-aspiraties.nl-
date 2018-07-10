@extends('layouts.master')
@section('styles')

@stop

@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Add New Post</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Add New Post</h2>


                    {!! Form::open(['method'=>'POST', 'action'=>'BlogsController@store', 'files'=>true ]) !!}

                    <div class="form-group">

                        {!! Form::label('title_ar', 'Title In Arabic:') !!}
                        {!! Form::text('title_ar', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('title_en', 'Title In English:') !!}
                        {!! Form::text('title_en', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('title_ned', 'Title In Netherlands:') !!}
                        {!! Form::text('title_ned', null, ['class'=>'form-control']) !!}
                    </div>





                    <div class="form-group">

                        {!! Form::label('body_ar', 'Description In Arabic:') !!}
                        {!! Form::textarea('body_ar', null , ['class'=>'form-control' , 'rows'=>6 ]) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('body_en', 'Description In English:') !!}
                        {!! Form::textarea('body_en', null , ['class'=>'form-control' , 'rows'=>6 ]) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('body_ned', 'Description In Netherlands:') !!}
                        {!! Form::textarea('body_ned', null , ['class'=>'form-control' , 'rows'=>6 ]) !!}
                    </div>


                    <div class="form-group">

                        {!! Form::label('photo_id', 'Upload:') !!}
                        {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
                    </div>



                    <div class="form-group">
                        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                    </div>


                    {!! Form::close() !!}

                </div>

            </div>
        </div>
        <!-- end row -->

    </div>

@stop




@section('scripts')

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/pages/validation-custom.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@stop

