@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Statistics </h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Statistics</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Icon Tag</th>
                                <th>Number</th>
                                <th>Title In En</th>
                                <th>Title In Ar</th>
                                <th>Title In Ned</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($stats)
                                @foreach($stats as $stat)
                                    <tr>
                                        <td>{{$stat->id}}</td>
                                        <td><a href="{{ Request::root() }}/admin/stats/{{$stat->id}}/edit">{{$stat->icon}}</a></td>
                                        <td>{{$stat->num}}</td>
                                        <td>{{$stat->title}}</td>
                                        <td>{{$stat->title_ar}}</td>
                                        <td>{{$stat->title_ned}}</td>
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

