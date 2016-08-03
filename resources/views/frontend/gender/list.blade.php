{!! Form::select('gender_id', $genders, @isset($user->gender_id)? $user->gender_id : '1', array('class' => 'form-control')) !!}
