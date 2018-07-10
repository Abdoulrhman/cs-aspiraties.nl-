@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update Offers</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-6">

                {!! Form::model($offer, ['method'=>'PATCH', 'action'=>['OffersController@update',$offer->id], 'files'=>true ]) !!}

                <div class="form-group">

                    {!! Form::label('title1_ar', 'Title 1 AR:') !!}
                    {!! Form::text('title1_ar', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title1_en', 'Title 1 EN:') !!}
                    {!! Form::text('title1_en', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">

                    {!! Form::label('title1_ned', 'Title 1 NED:') !!}
                    {!! Form::text('title1_ned', null, ['class'=>'form-control']) !!}
                </div>




                <div class="form-group">

                    {!! Form::label('title2_ar', 'Title 2 AR:') !!}
                    {!! Form::text('title2_ar', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title2_en', 'Title 2 EN:') !!}
                    {!! Form::text('title2_en', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">

                    {!! Form::label('title2_ned', 'Title 2 NED:') !!}
                    {!! Form::text('title2_ned', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Update Offer', ['class'=>'btn btn-primary col-sm-8']) !!}
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

