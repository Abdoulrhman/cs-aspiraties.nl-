@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Section 4</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Section 4</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Title 1 In Ar</th>
                                <th>Title 2 In Ar</th>
                                <th>Title 3 In Ar</th>
                                <th>Title 4 In Ar</th>


                                <th>Title 1 In En</th>
                                <th>Title 2 In En</th>
                                <th>Title 3 In En</th>
                                <th>Title 4 In En</th>

                                <th>Title 1 In Ned</th>
                                <th>Title 2 In Ned</th>
                                <th>Title 3 In Ned</th>
                                <th>Title 4 In Ned</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($title_4s)
                                @foreach($title_4s as $title_4)
                                    <tr>
                                        <td>{{$title_4->id}}</td>
                                        <td><img height="50" class="img-rounded" src="{{asset('')}}{{$title_4->photo ? $title_4->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>

                                        <td><a href="{{ Request::root() }}/admin/about_us_sections/section4/{{$title_4->id}}/edit">{{$title_4->title1_ar}}</td>
                                        <td>{{$title_4->title2_ar}}</td>
                                        <td>{{$title_4->title3_ar}}</td>
                                        <td>{{$title_4->title4_ar}}</td>


                                        <td><a href="{{ Request::root() }}/admin/about_us_sections/section4/{{$title_4->id}}/edit">{{$title_4->title1_en}}</td>
                                        <td>{{$title_4->title2_en}}</td>
                                        <td>{{$title_4->title3_en}}</td>
                                        <td>{{$title_4->title4_en}}</td>


                                        <td><a href="{{ Request::root() }}/admin/about_us_sections/section4/{{$title_4->id}}/edit">{{$title_4->title1_ned}}</td>
                                        <td>{{$title_4->title2_ned}}</td>
                                        <td>{{$title_4->title3_ned}}</td>
                                        <td>{{$title_4->title4_ned}}</td>

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

