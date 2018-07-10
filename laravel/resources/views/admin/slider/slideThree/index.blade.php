@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Slider 3</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Slide Three Images</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>photo_id</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($pics)
                                @foreach($pics as $pic)
                                    <tr>
                                        <td>{{$pic->id}}</td>
                                        <td><img height="50" class="img-rounded" src="{{asset('')}}{{$pic->photo ? $pic->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>

                                        <td><a href="{{ Request::root() }}/admin/slider/slideThree/{{$pic->id}}/edit">{{$pic->title}}</a></td>
                                        <td>{{$pic->photo_id}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>  <!--End row-->

    </div>

@stop




@section('scripts')


@stop

