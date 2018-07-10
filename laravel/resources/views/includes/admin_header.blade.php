<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-main">

        <div class="logo">
            <a href="{!! url('/index-2') !!}">
                <img src="{{asset('assets/img/logo.png')}}" alt="Logo" class="img-responsive"/> </a>
        </div> <!--/.logo-->

        <div class="sidebar-main-toggle">
            <a href="javascript:;" class="navbar-small pull-left "><i class="fa fa-bars"></i></a>
        </div> <!--/.menu-toggler-->

        <!--Start Search-->
        <div class="search-top">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </form>
        </div>
        <!--End Search-->

        <!--Start Right Menu-->
        <div class="right-menu">
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!--End Right Menu-->
    </div>
</div>