@extends('backend.admin.layouts.master')

@section('content')

    <h1>Course</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Description</th><th>Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $course->id }}</td>
                    <td> {{ $course->name }} </td>
                    <td> {{ $course->description }} </td>
                    <td> {{ $course->category->name }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
