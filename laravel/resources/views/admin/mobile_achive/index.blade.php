@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">View Mobile Achievements</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Mobile Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Title In Ar</th>
                                <th>Body In Ar</th>
                                <th>Title In Ned</th>
                                <th>Body In Ned</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($mobiles)
                                @foreach($mobiles as $mobile)
                            <tr>
                                <td>{{$mobile->id}}</td>
                                <td><img height="50" class="img-rounded" src="{{$mobile->photo ? $mobile->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                                <td><a href="{{Request::root()}}/admin/mobile_achive/{{$mobile->id}}/edit">{{$mobile->title}}</a></td>
                                <td>{{$mobile->body}}</td>
                                <td>{{$mobile->title_ar}}</td>
                                <td>{{$mobile->body_ar}}</td>
                                <td>{{$mobile->title_ned}}</td>
                                <td>{{$mobile->body_ned}}</td>
                                <td>{{$mobile->created_at}}</td>
                                <td>{{$mobile->updated_at->diffForhumans()}}</td>
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

