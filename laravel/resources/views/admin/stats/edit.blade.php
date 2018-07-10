@extends('layouts.master')
@section('styles')
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
@stop



@section('content')

    <div class="content-main container">

        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Update Stats</h4>
            <div class="clearfix"></div>
        </div>
        <!--End Page Title-->

        <!--Start row-->
        <div class="row">
            <div class="col-md-6">

                {!! Form::model($stat, ['method'=>'PATCH', 'action'=>['StatController@update',$stat->id], 'files'=>true ]) !!}

                <div class="form-group">

                    {!! Form::label('icon', 'Icon:') !!}
                    {!! Form::text('icon', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('num', 'Numbers:') !!}
                    {!! Form::text('num', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Update Icon', ['class'=>'btn btn-primary col-sm-8']) !!}
                </div>


                {!! Form::close() !!}

                </div>
            <div class="col-md-6">
                <div class="white-box">
                    <h2 class="header-title">Icons Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Tag</th>
                                <th>GO</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td style="background-color: #34d3eb"><img src="{{asset('/uploads/expert.png')}}" alt=""></td>
                                <td>

                                    <input id="myInput" type="text" value="expert">

                                </td>
                                <td>

                                    <button class="btn btn-info" onclick="myFunction()" onmouseout="outFunc()">
                                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                    </button>

                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #34d3eb"><img src="{{asset('/uploads/happy.png')}}" alt=""></td>
                                <td>

                                    <input id="myInput" type="text" value="happy">

                                </td>
                                <td>

                                    <button class="btn btn-info" onclick="myFunction()" onmouseout="outFunc()">
                                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                    </button>

                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #34d3eb"><img src="{{asset('/uploads/dev_hand.png')}}" alt=""></td>
                                <td>

                                    <input id="myInput" type="text" value="dev_hand">

                                </td>
                                <td>

                                    <button class="btn btn-info" onclick="myFunction()" onmouseout="outFunc()">
                                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                    </button>

                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #34d3eb"><img src="{{asset('/uploads/com.png')}}" alt=""></td>
                                <td>

                                    <input id="myInput" type="text" value="com">

                                </td>
                                <td>

                                    <button class="btn btn-info" onclick="myFunction()" onmouseout="outFunc()">
                                        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                    </button>

                                </td>
                            </tr>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end row -->

    </div>



@stop




@section('scripts')
    <script>
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            document.execCommand("Copy");

            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copied: " + copyText.value;
        }

        function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copy to clipboard";
        }
    </script>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/pages/validation-custom.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@stop

