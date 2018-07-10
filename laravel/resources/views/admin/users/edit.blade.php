@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update User</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-4">
                <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

            </div>
            <div class="col-md-8">

                {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UserController@update',$user->id], 'files'=>true ]) !!}

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
                    {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active') , null , ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('photo_id', 'Upload:') !!}
                    {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-8']) !!}
                </div>


                {!! Form::close() !!}



                {!! Form::open(['method'=>'DELETE', 'action'=>['UserController@destroy', $user->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-4']) !!}
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

