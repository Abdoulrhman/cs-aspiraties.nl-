@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update Testimonial</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-4">
                <img src="{{$testi->photo ? $testi->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

            </div>
            <div class="col-md-8">

                {!! Form::model($testi, ['method'=>'PATCH', 'action'=>['TestisController@update',$testi->id], 'files'=>true ]) !!}



                <div class="form-group">

                    {!! Form::label('body', 'Feedback:') !!}
                    {!! Form::textarea('body', null , ['class'=>'form-control' , 'rows'=>10 ]) !!}
                </div>



                <div class="form-group">

                    {!! Form::label('photo_id', 'Upload:') !!}
                    {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update Testimonial', ['class'=>'btn btn-primary']) !!}
                </div>


                {!! Form::close() !!}


                {!! Form::open(['method'=>'DELETE', 'action'=>['TestisController@destroy', $testi->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Testimonial', ['class'=>'btn btn-danger col-sm-4']) !!}
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

