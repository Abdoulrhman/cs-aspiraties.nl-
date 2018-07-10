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

                {!! Form::model($title_1, ['method'=>'PATCH', 'action'=>['SectionOneController@update',$title_1->id], 'files'=>true ]) !!}

                <div class="form-group">

                    {!! Form::label('title1_ar', 'Title 1 AR:') !!}
                    {!! Form::text('title1_ar', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title2_ar', 'Title 2 AR:') !!}
                    {!! Form::text('title2_ar', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title3a_ar', 'Title 3a AR:') !!}
                    {!! Form::text('title3a_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title3b_ar', 'Title 3b AR:') !!}
                    {!! Form::text('title3b_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4a_ar', 'Title 4a AR:') !!}
                    {!! Form::text('title4a_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4b_ar', 'Title 4b AR:') !!}
                    {!! Form::text('title4b_ar', null, ['class'=>'form-control']) !!}
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

                    {!! Form::label('title3a_en', 'Title 3a en:') !!}
                    {!! Form::text('title3a_en', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title3b_en', 'Title 3b en:') !!}
                    {!! Form::text('title3b_en', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4a_en', 'Title 4a en:') !!}
                    {!! Form::text('title4a_en', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4b_en', 'Title 4b en:') !!}
                    {!! Form::text('title4b_en', null, ['class'=>'form-control']) !!}
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

                    {!! Form::label('title3a_ned', 'Title 3a ned:') !!}
                    {!! Form::text('title3a_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title3b_ned', 'Title 3b ned:') !!}
                    {!! Form::text('title3b_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4a_ned', 'Title 4a ned:') !!}
                    {!! Form::text('title4a_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4b_ned', 'Title 4b ned:') !!}
                    {!! Form::text('title4b_ned', null, ['class'=>'form-control']) !!}
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

