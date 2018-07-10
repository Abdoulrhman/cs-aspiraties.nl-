@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">View SEO Achievements</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">SEO Table</h2>
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
                            @if($seos)
                                @foreach($seos as $seo)
                            <tr>
                                <td>{{$seo->id}}</td>
                                <td><img height="50" class="img-rounded" src="{{$seo->photo ? $seo->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                                <td><a href="{{Request::root()}}/admin/seo_achive/{{$seo->id}}/edit">{{$seo->title}}</a></td>
                                <td>{{$seo->body}}</td>
                                <td>{{$seo->title_ar}}</td>
                                <td>{{$seo->body_ar}}</td>
                                <td>{{$seo->title_ned}}</td>
                                <td>{{$seo->body_ned}}</td>
                                <td>{{$seo->created_at}}</td>
                                <td>{{$seo->updated_at->diffForhumans()}}</td>
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

