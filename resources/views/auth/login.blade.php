@extends('frontend.layout.app')

@section('content')
<section id="login_bg">
    <div  class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 margintop marginbottom" style="background : white;">
                <div id="login">
                    <p class="text-center">
                        <img src="{{ URL::to('img/login_logo.png') }}" alt="">
                    </p>
                    <hr>
                    {!! Form::open(array('url' => URL::to('login'), 'method' => 'POST', 'files'=> true)) !!}
                    <div class="row">
                        <div class="col-md-4 col-sm-4 login_social">
                            <a href="{{ route('auth', ['provider' => 'facebook']) }}" class="btn btn-primary btn-block"><i class="icon-facebook"></i></a>
                        </div>
                        <div class="col-md-4 col-sm-4 login_social">
                            <a href="{{ route('auth', ['provider' => 'twitter']) }}" class="btn btn-info btn-block "><i class="icon-twitter"></i></a>
                        </div>
                        <div class="col-md-4 col-sm-4 login_social">
                            <a href="{{ route('auth', ['provider' => 'google']) }}" class="btn btn-danger btn-block"><i class="icon-google"></i></a>
                        </div>
                    </div> <!-- end row -->

                    <hr>

                    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                        <div class="controls">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                <i class="icon-mail"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="{{ trans('messages.email') }}" aria-describedby="basic-addon1">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                        <div class="controls">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                    <i class="icon-key"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="{{ trans('messages.password') }}" aria-describedby="basic-addon2">
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <p class="small">
                        <a href="{{URL::to('/password/reset')}}">{{ trans('messages.forgot_password') }}</a>
                    </p>

                    <div class="form-group">
                        {!!  Form::checkbox('remember'); !!} {{ trans('messages.remember') }}
                    </div>

                    <a href="{{URL::to('register')}}" class="btn btn-default pull-right">
                        {{ trans('messages.register') }}
                    </a>
                    <button type="submit" class="btn btn-info pull-right">{{ trans('messages.sign_in') }}</button>
                  {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section> <!-- End login -->
@endsection
