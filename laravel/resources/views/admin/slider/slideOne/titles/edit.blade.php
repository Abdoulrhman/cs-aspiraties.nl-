@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update Slider</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-12">

                {!! Form::model($slideOneTitle, ['method'=>'PATCH', 'action'=>['SlideOneTitlesController@update',$slideOneTitle->id], 'files'=>true ]) !!}

                <div class="form-group">

                    {!! Form::label('title1', 'Title1:') !!}
                    {!! Form::text('title1', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">

                    {!! Form::label('title2', 'Title2:') !!}
                    {!! Form::text('title2', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title3', 'Title3:') !!}
                    {!! Form::text('title3', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4', 'Title4:') !!}
                    {!! Form::text('title4', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title5', 'Title5:') !!}
                    {!! Form::text('title5', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title6', 'Title6:') !!}
                    {!! Form::text('title6', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title7', 'Title7:') !!}
                    {!! Form::text('title7', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title8', 'Title8:') !!}
                    {!! Form::text('title8', null, ['class'=>'form-control']) !!}
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

