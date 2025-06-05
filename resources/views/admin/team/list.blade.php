@extends('admin.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection
@section('content')
<table class="table table-bordered">
    <tr>
        <th>Icon</th>
        <th>Name</th>
        <th>Post</th>
        <th>Description</th>
        <th>Option</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($team as $team)
    <tr>
        <td>{{ $team->icon }}</td>
        <td>{{ $team->name }}</td>
        <td>{{ $team->post }}</td>
        <td>{{ $team->description }}</td>
        <td>{{ $team->option }}</td>

        <td><a  href="{{ route('team.edit', $team->id) }}"><button class="btn btn-success">Edit</button></a></td>
        <td><a href="{{ route('team.delete',$team->id) }}" onclick="return confirm('Are You sure to Delete This?')"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
</table>
@endsection('content')
