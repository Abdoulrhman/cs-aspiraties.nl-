@extends('layouts.master')
@section('styles')

@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">View all users</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!-- Start responsive Table-->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Users Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($users)
                                @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><img height="50" class="img-rounded" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                                <td><a href="{{Request::root()}}/admin/users/{{$user->id}}/edit">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role ? $user->role->name : 'User has no role '}}</td>
                                <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at->diffForhumans()}}</td>
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

