@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update Slide</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-12">

                {!! Form::model($title, ['method'=>'PATCH', 'action'=>['SlideOneController@update',$title->id], 'files'=>true ]) !!}

                <div class="form-group">

                    {!! Form::label('title1', 'Title:') !!}
                    {!! Form::text('title1', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title2', 'Title:') !!}
                    {!! Form::text('title2', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('body', 'Content') !!}
                    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                </div>



                <div class="form-group">
                    {!! Form::submit('Update Slider', ['class'=>'btn btn-primary col-sm-8']) !!}
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

