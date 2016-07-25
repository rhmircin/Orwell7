@extends('frontend.layout.app')

@section('content')
<section id="login_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div id="login">
                    <p class="text-center">
                        <img src="{{ URL::to('img/login_logo.png') }}" alt="">
                    </p>
                    <hr>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name', trans('messages.user'), array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::text('name', null, array('class' => 'form-control')) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', trans('messages.email'), array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::text('email', null, array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password', trans('messages.password'), array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::password('password', array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        {!! Form::label('password_confirmation', trans('messages.confirm_password'), array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                        </div>
                    </div>
                    <button type="submit" class="button_fullwidth">{{ trans('messages.register') }}</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div> <!--end row -->
    </div> <!--end container -->
</section>
@endsection
