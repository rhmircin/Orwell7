<header>
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-1">
                <a href="{{URL::to('/home')}}" id="logo">{{ trans('messages.title') }}</a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <p class="title">{{ trans('messages.title') }}</p>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7">
                <div class=" pull-right">
                    @if (Auth::guest())
                    <a href="{{URL::to('login')}}" class="button_top" id="login_top">{{ trans('messages.sign_in') }}</a>
                    <a href="{{URL::to('register')}}" class="button_top hidden-xs" id="apply">{{ trans('messages.register') }}</a>
                    @else
                    <ul class="pull-right user_panel">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ trans('messages.welcome') }} <strong> {{ Auth::user()->name }} </strong> 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to('profile')}}"><i class="icon-user"></i> {{ trans('messages.profile') }}</a></li>
                                <li><a href="#"><i class="icon-download"></i> {{ trans('messages.downloads') }}</a></li>
                                <li><a href="#"><i class="icon-cog"></i> {{ trans('messages.settings') }}</a></li>
                                <li class="divider"></li>
                                @if(Auth::user()->isAdmin())
                                <li><a href="{{URL::to('admin')}}"><i class="icon-briefcase"></i> {{ trans('messages.admin') }}</a>
                                @endif
                                <li><a href="{{URL::to('logout')}}"><i class="icon-off"></i> {{ trans('messages.logout') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                    @endif

                </div>
                <!--<ul id="top_nav" class="hidden-xs">
                <li><a href="about_us.html">About</a></li>
                <li><a href="apply.html">Wizard Apply</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>-->
        </div>
    </div>
</div>
</header><!-- End header -->
