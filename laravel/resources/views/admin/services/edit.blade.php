@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update Service</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('')}}{{$service->photo ? $service->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

            </div>
            <div class="col-md-8">

                {!! Form::model($service, ['method'=>'PATCH', 'action'=>['ServicesController@update',$service->id], 'files'=>true ]) !!}

                <div class="form-group">

                    {!! Form::label('main_title', 'Plan Name En:') !!}
                    {!! Form::text('main_title', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('main_title_ar', 'Plan Name Ar:') !!}
                    {!! Form::text('main_title_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('main_title_ned', 'Plan Name Ned:') !!}
                    {!! Form::text('main_title_ned', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title1', 'Title 1 Name En:') !!}
                    {!! Form::text('title1', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title1_ar', 'Title 1 Name Ar:') !!}
                    {!! Form::text('title1_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title1_ned', 'Title 1 Name Ned:') !!}
                    {!! Form::text('title1_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('value1', 'Value 1:') !!}
                    {!! Form::text('value1', null, ['class'=>'form-control']) !!}
                </div>



                <div class="form-group">

                    {!! Form::label('title2', 'Title 2 Name En:') !!}
                    {!! Form::text('title2', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title2_ar', 'Title 2 Name Ar:') !!}
                    {!! Form::text('title2_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title2_ned', 'Title 2 Name Ned:') !!}
                    {!! Form::text('title2_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('value2', 'Value 2:') !!}
                    {!! Form::text('value2', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title3', 'Title 3 Name En:') !!}
                    {!! Form::text('title3', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title3_ar', 'Title 3 Name Ar:') !!}
                    {!! Form::text('title3_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title3_ned', 'Title 3 Name Ned:') !!}
                    {!! Form::text('title3_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('value2', 'Value 2:') !!}
                    {!! Form::text('value2', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title4', 'Title 4 Name En:') !!}
                    {!! Form::text('title4', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4_ar', 'Title 4 Name Ar:') !!}
                    {!! Form::text('title4_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title4_ned', 'Title 4 Name Ned:') !!}
                    {!! Form::text('title4_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('value4', 'Value 4:') !!}
                    {!! Form::text('value4', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title5', 'Title 5 Name En:') !!}
                    {!! Form::text('title5', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title5_ar', 'Title 5 Name Ar:') !!}
                    {!! Form::text('title5_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title5_ned', 'Title 5 Name Ned:') !!}
                    {!! Form::text('title5_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('value5', 'Value 5:') !!}
                    {!! Form::text('value5', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title6', 'Title 6 Name En:') !!}
                    {!! Form::text('title6', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title6_ar', 'Title 6 Name Ar:') !!}
                    {!! Form::text('title6_ar', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('title6_ned', 'Title 6 Name Ned:') !!}
                    {!! Form::text('title6_ned', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('value6', 'Value 6:') !!}
                    {!! Form::text('value6', null, ['class'=>'form-control']) !!}
                </div>






                <div class="form-group">

                    {!! Form::label('photo_id', 'Upload:') !!}
                    {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Service', ['class'=>'btn btn-primary col-sm-8']) !!}
                </div>


                {!! Form::close() !!}



                {!! Form::open(['method'=>'DELETE', 'action'=>['ServicesController@destroy', $service->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Service', ['class'=>'btn btn-danger col-sm-4']) !!}
                </div>


                {!! Form::close() !!}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
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

