<div class="form-group">
    {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Category: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('category_id', $categories, @isset($course)? $course->category_id : '1', array('class' => 'form-control')) !!}
        <span class="help-block">{{ $errors->first('category_id', ':message') }}</span>
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', 'Image: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('image', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('active', 'Active: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::radio('active', '1', ['class' => 'form-control']) !!}Yes
        {!! Form::radio('active', '0', ['class' => 'form-control']) !!}No
    </div>
</div>
<div class="form-group">
    {!! Form::label('max_students', 'Max Students: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::number('max_students', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('price', 'Price: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::number('price', null, ['class' => 'form-control']) !!}
    </div>
</div>