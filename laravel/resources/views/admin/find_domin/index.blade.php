@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Type The Offer Here</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Offers</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title1_ar</th>
                                <th>Title1_en</th>
                                <th>Title1_ned</th>
                                <th>Title2_ar</th>
                                <th>Title2_en</th>
                                <th>Title2_ned</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($offers)
                                @foreach($offers as $offer)
                                    <tr>
                                        <td>{{$offer->id}}</td>
                                        <td><a href="{{ Request::root() }}/admin/find_domin/{{$offer->id}}/edit">{{$offer->title1_ar}}</td>
                                        <td>{{$offer->title1_en}}</td>
                                        <td>{{$offer->title1_ned}}</td>
                                        <td>{{$offer->title2_ar}}</td>
                                        <td>{{$offer->title2_en}}</td>
                                        <td>{{$offer->title2_ned}}</td>

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

