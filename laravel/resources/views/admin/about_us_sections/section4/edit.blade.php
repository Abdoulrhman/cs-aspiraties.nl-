@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update Section</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-6">

                {!! Form::model($title_4, ['method'=>'PATCH', 'action'=>['SectionFourController@update',$title_4->id], 'files'=>true ]) !!}

                <div class="form-group">

                    {!! Form::label('title1_ar', 'Title 1 AR:') !!}
                    {!! Form::text('title1_ar', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title2_ar', 'Title 2 AR:') !!}
                    {!! Form::text('title2_ar', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title3_ar', 'Title 3 AR:') !!}
                    {!! Form::text('title3_ar', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">

                    {!! Form::label('title4_ar', 'Title 4 AR:') !!}
                    {!! Form::text('title4_ar', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title1_en', 'Title 1 en:') !!}
                    {!! Form::text('title1_en', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title2_en', 'Title 2 en:') !!}
                    {!! Form::text('title2_en', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title3_en', 'Title 3 en:') !!}
                    {!! Form::text('title3_en', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">

                    {!! Form::label('title4_en', 'Title 4 en:') !!}
                    {!! Form::text('title4_en', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title1_ned', 'Title 1 ned:') !!}
                    {!! Form::text('title1_ned', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title2_ned', 'Title 2 ned:') !!}
                    {!! Form::text('title2_ned', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title3_ned', 'Title 3 ned:') !!}
                    {!! Form::text('title3_ned', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">

                    {!! Form::label('title4_ned', 'Title 4 ned:') !!}
                    {!! Form::text('title4_ned', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('photo_id', 'Upload:') !!}
                    {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Section', ['class'=>'btn btn-primary col-sm-8']) !!}
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

