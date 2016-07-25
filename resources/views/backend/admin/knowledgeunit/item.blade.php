<div class="form-group">
    {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('order', 'Order: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::number('order', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('unit_id', 'Unit: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('unit_id', $units, @isset($knowledgeunit)? $knowledgeunit->unit_id : '1', array('class' => 'form-control')) !!}
        <span class="help-block">{{ $errors->first('unit_id', ':message') }}</span>
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('image', 'Image: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('image', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('media_link', 'Media Link: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('media_link', null, ['class' => 'form-control']) !!}
    </div>
</div>
