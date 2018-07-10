@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update SEO achievement</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-4">
                <img src="{{$seo->photo ? $seo->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

            </div>
            <div class="col-md-8">

                {!! Form::model($seo, ['method'=>'PATCH', 'action'=>['SeosController@update',$seo->id], 'files'=>true ]) !!}

                <div class="form-group">

                    {!! Form::label('title', 'Name:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('body', 'Description:') !!}
                    {!! Form::textarea('body', null , ['class'=>'form-control' , 'rows'=>6 ]) !!}
                </div>



                <div class="form-group">

                    {!! Form::label('photo_id', 'Upload:') !!}
                    {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Service', ['class'=>'btn btn-primary col-sm-8']) !!}
                </div>


                {!! Form::close() !!}



                {!! Form::open(['method'=>'DELETE', 'action'=>['SeosController@destroy', $seo->id]]) !!}

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

