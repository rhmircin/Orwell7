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
                    <a href="#" class="button_top hidden-xs">{{ trans('messages.welcome') .Auth::user()->name }}</a>
                    @if(Auth::user()->isAdmin())
                    <a href="{{URL::to('admin')}}" class="button_top hidden-xs">{{ trans('messages.admin') }}</a>
                    @endif
                    <a href="{{URL::to('logout')}}" class="button_top hidden-xs" id="logout">{{ trans('messages.logout') }}</a>
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
