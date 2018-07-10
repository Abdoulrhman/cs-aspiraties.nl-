@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update Product</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-4">
                <img src="{{$product->photo ? $product->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

            </div>
            <div class="col-md-8">

                {!! Form::model($product, ['method'=>'PATCH', 'action'=>['ProductsController@update',$product->id], 'files'=>true ]) !!}

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
                    {!! Form::submit('Update product', ['class'=>'btn btn-primary col-sm-8']) !!}
                </div>


                {!! Form::close() !!}



                {!! Form::open(['method'=>'DELETE', 'action'=>['ProductsController@destroy', $product->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete product', ['class'=>'btn btn-danger col-sm-4']) !!}
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

