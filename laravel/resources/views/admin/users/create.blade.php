@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Add New User</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Add New User</h2>


                    {!! Form::open(['method'=>'POST', 'action'=>'UserController@store', 'files'=>true ]) !!}

                    <div class="form-group">

                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email','E-mail:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password','Password:') !!}
                        {!! Form::password('password', ['class' => 'form-control'])!!}
                    </div>


                    <div class="form-group">

                        {!! Form::label('is_active', 'Status:') !!}
                        {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active') , 0 , ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('photo_id', 'Upload:') !!}
                        {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
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

