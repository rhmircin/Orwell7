@extends('frontend.layout.app')

@section('content')
<section id="login_bg">
    <div  class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
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

                    <div class="login-or"><hr class="hr-or"><span class="span-or">or</span></div>

                    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', trans('messages.email'), array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::text('email', null, array('class' => 'form-control')) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password', trans('messages.password'), array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::password('password', array('class' => 'form-control')) !!}
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

                    <button type="submit" class="button_fullwidth">{{ trans('messages.sign_in') }}</button>
                    <a href="{{URL::to('register')}}" class="button_fullwidth-2">{{ trans('messages.register') }}</a>
                  {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section> <!-- End login -->
@endsection
