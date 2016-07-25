@extends('backend.admin.layouts.master')

@section('content')

    <h1>Create New Unit</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/unit', 'class' => 'form-horizontal']) !!}
        @include('backend.admin.unit.item')
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
