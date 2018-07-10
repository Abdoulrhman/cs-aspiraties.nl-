@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">View all Services</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Services Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Photo</th>
                                <th>Main Title En</th>
                                <th>Main Title Ar</th>
                                <th>Main Title Ned</th>

                                <th>Title1 In En</th>
                                <th>Title1 In Ar</th>
                                <th>Title1 In Ned</th>
                                <th>Value 1</th>


                                <th>Title2 In En</th>
                                <th>Title2 In Ar</th>
                                <th>Title2 In Ned</th>
                                <th>Value 2</th>


                                <th>Title3 In En</th>
                                <th>Title3 In Ar</th>
                                <th>Title3 In Ned</th>
                                <th>Value 3</th>

                                <th>Title4 In En</th>
                                <th>Title4 In Ar</th>
                                <th>Title4 In Ned</th>
                                <th>Value 4</th>

                                <th>Title5 In En</th>
                                <th>Title5 In Ar</th>
                                <th>Title5 In Ned</th>
                                <th>Value 5</th>

                                <th>Title6 In En</th>
                                <th>Title6 In Ar</th>
                                <th>Title6 In Ned</th>
                                <th>Value 6</th>

                                <th>Created_at</th>
                                <th>Updated_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($services)
                                @foreach($services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td><img height="50" class="img-rounded" src="{{asset('')}}{{$service->photo ? $service->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                                <td><a href="{{Request::root()}}/admin/services/{{$service->id}}/edit">{{$service->main_title}}</a></td>
                                <td>{{$service->Main_title_ar}}</td>
                                <td>{{$service->Main_title_ned}}</td>

                                <td>{{$service->title1}}</td>
                                <td>{{$service->title1_ar}}</td>
                                <td>{{$service->title1_ned}}</td>

                                <td>{{$service->title2}}</td>
                                <td>{{$service->title2_ar}}</td>
                                <td>{{$service->title2_ned}}</td>

                                <td>{{$service->title3}}</td>
                                <td>{{$service->title3_ar}}</td>
                                <td>{{$service->title3_ned}}</td>

                                <td>{{$service->title4}}</td>
                                <td>{{$service->title4_ar}}</td>
                                <td>{{$service->title4_ned}}</td>

                                <td>{{$service->title5}}</td>
                                <td>{{$service->title5_ar}}</td>
                                <td>{{$service->title5_ned}}</td>

                                <td>{{$service->title6}}</td>
                                <td>{{$service->title6_ar}}</td>
                                <td>{{$service->title6_ned}}</td>


                                <td>{{$service->created_at}}</td>
                                <td>{{$service->updated_at}}</td>
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

