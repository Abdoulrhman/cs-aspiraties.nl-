@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">View all posts</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Posts Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Title In Arabic</th>
                                <th>Title In English</th>
                                <th>Title In Netherlands</th>
                                <th>Body In Arabic</th>
                                <th>Body In English</th>
                                <th>Body In Netherlands</th>
                                <th>Created-at</th>
                                <th>Updated-at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($posts)
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td><img height="50" class="img-rounded" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                                        <td><a href="{{ Request::root() }}/admin/blogs/{{$post->id}}/edit">{{$post->title_ar}}</a></td>
                                        <td>{{$post->title_en}}</td>
                                        <td>{{$post->title_ned}}</td>
                                        <td>{{str_limit($post->body_ar  , 10)}}</td>
                                        <td>{{str_limit($post->body_en  , 10)}}</td>
                                        <td>{{str_limit($post->body_ned , 10)}}</td>
                                        <td>{{$post->created_at}}</td>
                                        <td>{{$post->updated_at}}</td>
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

