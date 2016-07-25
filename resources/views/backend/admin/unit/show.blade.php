@extends('backend.admin.layouts.master')

@section('content')

    <h1>Unit</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Order</th><th>Category Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $unit->id }}</td> <td> {{ $unit->name }} </td><td> {{ $unit->order }} </td><td> {{ $unit->category_id }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
