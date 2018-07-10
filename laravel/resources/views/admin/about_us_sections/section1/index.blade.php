@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Section 1</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Section 1</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Title 1 In Ar</th>
                                <th>Title 2 In Ar</th>
                                <th>Title 3a In Ar</th>
                                <th>Title 3b In Ar</th>
                                <th>Title 4a In Ar</th>
                                <th>Title 4b In Ar</th>

                                <th>Title 1 In En</th>
                                <th>Title 2 In En</th>
                                <th>Title 3a In En</th>
                                <th>Title 3b In En</th>
                                <th>Title 4a In En</th>
                                <th>Title 4b In En</th>

                                <th>Title 1 In Ned</th>
                                <th>Title 2 In Ned</th>
                                <th>Title 3a In Ned</th>
                                <th>Title 3b In Ned</th>
                                <th>Title 4a In Ned</th>
                                <th>Title 4b In Ned</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($title_1s)
                                @foreach($title_1s as $title_1)
                                    <tr>
                                        <td>{{$title_1->id}}</td>
                                        <td><img height="50" class="img-rounded" src="{{asset('')}}{{$title_1->photo ? $title_1->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>

                                        <td><a href="{{ Request::root() }}/admin/find_domin/{{$title_1->id}}/edit">{{$title_1->title1_ar}}</td>
                                        <td>{{$title_1->title2_ar}}</td>
                                        <td>{{$title_1->title3a_ar}}</td>
                                        <td>{{$title_1->title3b_ar}}</td>
                                        <td>{{$title_1->title4a_ar}}</td>
                                        <td>{{$title_1->title4b_ar}}</td>

                                        <td><a href="{{ Request::root() }}/admin/about_us_sections/section1/{{$title_1->id}}/edit">{{$title_1->title1_en}}</td>
                                        <td>{{$title_1->title2_en}}</td>
                                        <td>{{$title_1->title3a_en}}</td>
                                        <td>{{$title_1->title3b_en}}</td>
                                        <td>{{$title_1->title4a_en}}</td>
                                        <td>{{$title_1->title4b_en}}</td>

                                        <td>{{$title_1->title1_ned}}</td>
                                        <td>{{$title_1->title2_ned}}</td>
                                        <td>{{$title_1->title3a_ned}}</td>
                                        <td>{{$title_1->title3b_ned}}</td>
                                        <td>{{$title_1->title4a_ned}}</td>
                                        <td>{{$title_1->title4b_ned}}</td>
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

