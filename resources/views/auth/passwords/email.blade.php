@extends('frontend.layout.app')

@section('content')
<section id="password_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
				<div id="login">
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif

					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

						<div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
	                        {!! Form::label('email', trans('messages.email'), array('class' => 'control-label')) !!}
	                        <div class="controls">
	                            {!! Form::text('email', null, array('class' => 'form-control')) !!}
	                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
	                        </div>
	                    </div>

						<button type="submit" class="button_fullwidth">{{ trans('messages.reset') }}</button>
					</form>

				</div> <!-- end login -->
			</div> <!-- end md -->
		</div> <!--end row -->
	</div> <!--end container -->
</section>
@endsection
