{!! Form::select('country_id', $countries, @isset($user->country_id)? $user->country_id : '1', array('class' => 'form-control')) !!}
