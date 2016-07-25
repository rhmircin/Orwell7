@extends('backend.admin.layouts.master')

@section('content')

    <h1>Knowledgeunits <a href="{{ url('admin/knowledgeunit/create') }}" class="btn btn-primary pull-right btn-sm">Add New Knowledgeunit</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Name</th><th>Order</th><th>Unit</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($knowledgeunits as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/knowledgeunit', $item->id) }}">{{ $item->name }}</a></td>
                    <td>{{ $item->order }}</td>
                    <td>{{ $item->unit->name }}</td>
                    <td>
                        <a href="{{ url('admin/knowledgeunit/'.$item->id.'/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a>
                        {!! Form::open(['method'=>'delete','url' => 'admin/knowledgeunit/' . $item->id, 'style' => 'display:inline']) !!}
                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
