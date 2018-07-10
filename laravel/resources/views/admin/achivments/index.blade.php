@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">View all Achievements</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Achievements Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Photo</th>
                                <th>Title In En</th>
                                <th>Body In En</th>
                                <th>Title In Ar</th>
                                <th>Body In Ar</th>
                                <th>Title In Ned</th>
                                <th>Body In Ned</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($achievements)
                                @foreach($achievements as $achievement)
                            <tr>
                                <td>{{$achievement->id}}</td>
                                <td><img height="50" class="img-rounded" src="{{asset('')}}{{$achievement->photo ? $achievement->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                                <td><a href="{{Request::root()}}/admin/achivments/{{$achievement->id}}/edit">{{$achievement->title}}</a></td>
                                <td>{{$achievement->body}}</td>
                                <td>{{$achievement->title_ar}}</td>
                                <td>{{$achievement->body_ar}}</td>
                                <td>{{$achievement->title_ned}}</td>
                                <td>{{$achievement->body_ned}}</td>
                                <td>{{$achievement->created_at}}</td>
                                <td>{{$achievement->updated_at->diffForhumans()}}</td>
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

