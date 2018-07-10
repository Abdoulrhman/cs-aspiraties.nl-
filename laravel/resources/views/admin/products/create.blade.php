@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Add New Product</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Add New Product</h2>


                    {!! Form::open(['method'=>'POST', 'action'=>'ProductsController@store', 'files'=>true ]) !!}

                    <div class="form-group">

                        {!! Form::label('title', 'Title_en:') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('body', 'Description_en:') !!}
                        {!! Form::textarea('body', null , ['class'=>'form-control' , 'rows'=>6 ]) !!}
                    </div>


                    <div class="form-group">

                        {!! Form::label('title_ar', 'Title_ar:') !!}
                        {!! Form::text('title_ar', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('body_ar', 'Description_ar:') !!}
                        {!! Form::textarea('body_ar', null , ['class'=>'form-control' , 'rows'=>6 ]) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('title_nld', 'Title_nld:') !!}
                        {!! Form::text('title_nld', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('body_nld', 'Description_nld:') !!}
                        {!! Form::textarea('body_nld', null , ['class'=>'form-control' , 'rows'=>6 ]) !!}
                    </div>



                    <div class="form-group">

                        {!! Form::label('photo_id', 'Upload:') !!}
                        {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create product', ['class'=>'btn btn-primary']) !!}
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

