@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Products</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Products Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Title in arabic</th>
                                <th>Body in arabic</th>
                                <th>Title in netherlands</th>
                                <th>Body in netherlands</th>

                                <th>Created_at</th>
                                <th>Updated_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($products)
                                @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td><img height="50" class="img-rounded" src="{{$product->photo ? $product->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                                <td><a href="{{Request::root()}}/admin/products/{{$product->id}}/edit">{{$product->title}}</a></td>
                                <td>{{$product->body}}</td>
                                <td>{{$product->title_ar}}</td>
                                <td>{{$product->body_ar}}</td>
                                <td>{{$product->title_nld}}</td>
                                <td>{{$product->body_nld}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>{{$product->updated_at->diffForhumans()}}</td>
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

