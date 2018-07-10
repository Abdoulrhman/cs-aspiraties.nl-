@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Slider 1</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Slide One Images</h2>
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
                            @if($images)
                                @foreach($images as $image)
                                    <tr>
                                        <td>{{$image->id}}</td>
                                        <td><img height="50" class="img-rounded" src="{{asset('')}}{{$image->photo ? $image->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>

                                        <td><a href="{{ Request::root() }}/admin/slider/slideOne/{{$image->id}}/edit">{{$image->title}}</a></td>
                                        <td>{{$image->photo_id}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>

                    <div class="white-box">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title1</th>
                                <th>Title2</th>
                                <th>Title3</th>
                                <th>Title4</th>
                                <th>Title5</th>
                                <th>Title6</th>
                                <th>Title7</th>
                                <th>Title8</th>

                                <th>Title1_ar</th>
                                <th>Title2_ar</th>
                                <th>Title3_ar</th>
                                <th>Title4_ar</th>
                                <th>Title5_ar</th>
                                <th>Title6_ar</th>
                                <th>Title7_ar</th>
                                <th>Title8_ar</th>

                                <th>Title1_ned</th>
                                <th>Title2_ned</th>
                                <th>Title3_ned</th>
                                <th>Title4_ned</th>
                                <th>Title5_ned</th>
                                <th>Title6_ned</th>
                                <th>Title7_ned</th>
                                <th>Title8_ned</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($slideOneTitles)
                                @foreach($slideOneTitles as $slideOneTitle)
                                    <tr>
                                        <td>{{$slideOneTitle->id}}</td>
                                        <td><a href="{{ Request::root() }}/admin/slider/slideOne/titles/{{$slideOneTitle->id}}/edit">{{$slideOneTitle->title1}}</a></td>
                                        <td>{{$slideOneTitle->title2}}</td>
                                        <td>{{$slideOneTitle->title3}}</td>
                                        <td>{{$slideOneTitle->title4}}</td>
                                        <td>{{$slideOneTitle->title5}}</td>
                                        <td>{{$slideOneTitle->title6}}</td>
                                        <td>{{$slideOneTitle->title7}}</td>
                                        <td>{{$slideOneTitle->title8}}</td>

                                        <td>{{$slideOneTitle->title1_ar}}</td>
                                        <td>{{$slideOneTitle->title2_ar}}</td>
                                        <td>{{$slideOneTitle->title3_ar}}</td>
                                        <td>{{$slideOneTitle->title4_ar}}</td>
                                        <td>{{$slideOneTitle->title5_ar}}</td>
                                        <td>{{$slideOneTitle->title6_ar}}</td>
                                        <td>{{$slideOneTitle->title7_ar}}</td>
                                        <td>{{$slideOneTitle->title8_ar}}</td>

                                        <td>{{$slideOneTitle->title1_ned}}</td>
                                        <td>{{$slideOneTitle->title2_ned}}</td>
                                        <td>{{$slideOneTitle->title3_ned}}</td>
                                        <td>{{$slideOneTitle->title4_ned}}</td>
                                        <td>{{$slideOneTitle->title5_ned}}</td>
                                        <td>{{$slideOneTitle->title6_ned}}</td>
                                        <td>{{$slideOneTitle->title7_ned}}</td>
                                        <td>{{$slideOneTitle->title8_ned}}</td>
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

