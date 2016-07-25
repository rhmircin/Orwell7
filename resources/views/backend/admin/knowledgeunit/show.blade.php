@extends('backend.admin.layouts.master')

@section('content')

    <h1>Knowledgeunit</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Order</th><th>Unit Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $knowledgeunit->id }}</td>
                    <td> {{ $knowledgeunit->name }} </td>
                    <td> {{ $knowledgeunit->order }} </td>
                    <td> {{ $knowledgeunit->unit->name }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
