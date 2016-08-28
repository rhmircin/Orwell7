@extends('frontend.layout.app')

@section('content')
<section id="login_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 margintop marginbottom backwhite">
                <div id="login">
                    <p class="text-center">
                        <img src="{{ URL::to('img/logo_128.png') }}" alt="">
                    </p>
                    <hr>
                    {!! Form::open(array('url' => URL::to('register'), 'method' => 'POST', 'files'=> true)) !!}
                    <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                        <div class="controls">
                            <div class="input-group">
                                <span class="input-group-addon" id="label-name">
                                <i class="icon-user"></i>
                                </span>
                                <input type="text" name="name" class="form-control" placeholder="{{ trans('messages.user') }}" aria-describedby="label-name">
                            </div>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                        <div class="controls">
                            <div class="input-group">
                                <span class="input-group-addon" id="label-email">
                                <i class="icon-mail"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="{{ trans('messages.email') }}" aria-describedby="label-email">
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
                                <span class="input-group-addon" id="label-password">
                                    <i class="icon-key-inv"></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="{{ trans('messages.password') }}" aria-describedby="label-password"  >
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        <div class="controls">
                            <div class="input-group">
                                <span class="input-group-addon" id="label-passwordc">
                                    <i class="icon-key-outline"></i>
                                </span>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('messages.confirm_password') }}" aria-describedby="label-passwordc"  >
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row loginbtn">
                        <button type="submit" class="btn btn-info fillwidth">
                            {{ trans('messages.register') }}
                        </button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div> <!--end row -->
    </div> <!--end container -->
</section>
@endsection
