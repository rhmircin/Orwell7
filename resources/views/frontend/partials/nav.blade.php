<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{URL::to('/home')}}" class="navbar-brand">
                <img src="img/logo.jpg" alt="{{ trans('messages.title') }}"></img>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(Request::is('home*')) 
                <li class="active">
                @elseif(Request::path() == '/') 
                <li class="active">
                @else
                <li>
                @endif
                    <a href="{{ URL::to('/home') }}">{{ trans('messages.home') }} 
                    <span class="sr-only">(current)</span>
                    </a>
                </li> 

                @if(Request::is('courses*'))
                <li class="dropdown active">
                @else
                <li class="dropdown">
                @endif
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('messages.courses') }}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ URL::to('/courses') }}">{{ trans('messages.basiccourse') }}</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ URL::to('/courses') }}">{{ trans('messages.advancourse') }}</a>
                        </li>
                    </ul>
                </li>

                @if(Request::is('contact*')) 
                <li class="active">
                @else
                <li>
                @endif
                    <a href="{{ URL::to('/contact') }}">{{ trans('messages.contact') }}</a>
                </li>

                @if(Request::is('blog*'))
                <li class="active">
                @else
                <li>
                @endif
                    <a href="{{ URL::to('/blog') }}">{{ trans('messages.blog') }}</a>
                </li>
            </ul>

            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="{{ trans('messages.search') }}">
                </div>
                <button type="submit" class="btn btn-default">{{ trans('messages.submit') }}</button>
             </form>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li>
                    <a href="{{URL::to('login')}}">{{ trans('messages.sign_in') }}</a>
                </li>
                <li>
                    <a href="{{URL::to('register')}}">{{trans('messages.register') }}</a>
                </li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ trans('messages.welcome') }} <strong> {{ Auth::user()->name }} </strong> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{URL::to('profile')}}"><i class="icon-user"></i> {{ trans('messages.profile') }}</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-download"></i> {{ trans('messages.downloads') }}</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-cog"></i> {{ trans('messages.settings') }}</a>
                        </li>
                        <li class="divider"></li>
                        @if(Auth::user()->isAdmin())
                        <li>
                            <a href="{{URL::to('admin')}}"><i class="icon-briefcase"></i> {{ trans('messages.admin') }}</a>
                        </li>
                        @endif
                        <li>
                            <a href="{{URL::to('logout')}}"><i class="icon-off"></i> {{ trans('messages.logout') }}</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>