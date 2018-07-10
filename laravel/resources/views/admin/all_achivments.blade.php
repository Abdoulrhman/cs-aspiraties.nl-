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
                                <th>Type</th>
                                <th>Create</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>Web Design</td>
                                        <td><a href="{{Request::root()}}/admin/achivments/create"><button class="btn btn info"> Create </button></a></td>
                                        <td><a href="{{Request::root()}}/admin/achivments"><button class="btn btn info"> View </button></a></td>

                                    </tr>

                                    <tr>
                                        <td>Logos</td>
                                        <td><a href="{{Request::root()}}/admin/logo_achive/create"><button class="btn btn info"> Create </button></a></td>
                                        <td><a href="{{Request::root()}}/admin/logo_achive"><button class="btn btn info"> View </button></a></td>

                                    </tr>

                                    <tr>
                                        <td>SEO</td>
                                        <td><a href="{{Request::root()}}/admin/seo_achive/create"><button class="btn btn info"> Create </button></a></td>
                                        <td><a href="{{Request::root()}}/admin/seo_achive"><button class="btn btn info"> View </button></a></td>

                                    </tr>



                                    <tr>
                                        <td>Mobile Apps</td>
                                        <td><a href="{{Request::root()}}/admin/mobile_achive/create"><button class="btn btn info"> Create </button></a></td>
                                        <td><a href="{{Request::root()}}/admin/mobile_achive"><button class="btn btn info"> View </button></a></td>

                                    </tr>

                                    <tr>
                                        <td>Web Apps</td>
                                        <td><a href="{{Request::root()}}/admin/web_app_achive/create"><button class="btn btn info"> Create </button></a></td>
                                        <td><a href="{{Request::root()}}/admin/web_app_achive"><button class="btn btn info"> View </button></a></td>

                                    </tr>


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

