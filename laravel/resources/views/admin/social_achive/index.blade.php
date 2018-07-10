@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">View Social  Media Achievements</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Social Media Table</h2>
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
                            @if($socials)
                                @foreach($socials as $social)
                            <tr>
                                <td>{{$social->id}}</td>
                                <td><img height="50" class="img-rounded" src="{{$social->photo ? $social->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                                <td><a href="{{Request::root()}}/admin/social_achive/{{$social->id}}/edit">{{$social->title}}</a></td>
                                <td>{{$social->body}}</td>
                                <td>{{$social->title_ar}}</td>
                                <td>{{$social->body_ar}}</td>
                                <td>{{$social->title_ned}}</td>
                                <td>{{$social->body_ned}}</td>
                                <td>{{$social->created_at}}</td>
                                <td>{{$social->updated_at->diffForhumans()}}</td>
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

