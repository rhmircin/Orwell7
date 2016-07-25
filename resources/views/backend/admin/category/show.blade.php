@extends('backend.admin.layouts.master')

@section('content')

    <h1>Category</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Description</th><th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $category->id }}</td> <td> {{ $category->name }} </td><td> {{ $category->description }} </td><td> {{ $category->image }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
