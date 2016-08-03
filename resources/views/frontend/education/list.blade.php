{!! Form::select('education_id', $educations, @isset($user->education_id)? $user->education_id : '1', array('class' => 'form-control')) !!}
