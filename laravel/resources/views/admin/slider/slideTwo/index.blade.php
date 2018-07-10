@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Slider 2</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Slide Two Titles</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title1</th>
                                <th>Title2</th>
                                <th>Title3</th>
                                <th>Title4a</th>
                                <th>Title4b</th>
                                <th>Body</th>
                                <th>Title1_ar</th>
                                <th>Title2_ar</th>
                                <th>Title3_ar</th>
                                <th>Title4a_ar</th>
                                <th>Title4b_ar</th>
                                <th>Body_ar</th>

                                <th>Title1_ned</th>
                                <th>Title2_ned</th>
                                <th>Title3_ned</th>
                                <th>Title4a_ned</th>
                                <th>Title4b_ned</th>
                                <th>Body_ned</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($titles)
                                @foreach($titles as $title)
                                    <tr>
                                        <td>{{$title->id}}</td>
                                        <td><a href="{{ Request::root() }}/admin/slider/slideTwo/{{$title->id}}/edit">{{$title->title1}}</a></td>
                                        <td>{{$title->title2}}</td>
                                        <td>{{$title->title3}}</td>
                                        <td>{{$title->title4a}}</td>
                                        <td>{{$title->title4b}}</td>
                                        <td>{{$title->body}}</td>

                                        <td>{{$title->title1_ar}}</td>
                                        <td>{{$title->title2_ar}}</td>
                                        <td>{{$title->title3_ar}}</td>
                                        <td>{{$title->title4a_ar}}</td>
                                        <td>{{$title->title4b_ar}}</td>
                                        <td>{{$title->body_ar}}</td>

                                        <td>{{$title->title1_ned}}</td>
                                        <td>{{$title->title2_ned}}</td>
                                        <td>{{$title->title3_ned}}</td>
                                        <td>{{$title->title4a_ned}}</td>
                                        <td>{{$title->title4b_ned}}</td>
                                        <td>{{$title->body_ned}}</td>
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

