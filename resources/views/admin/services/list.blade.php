@extends('admin.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection
@section('content')
<table class="table table-bordered">
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($services as $services)
    <tr>
        <td>{{ $services->id }}</td>
        <td>{{ $services->name }}</td>
        <td>{{ $services->description }}</td>
        <td><a href="{{ route('services.edit', $services->id) }}"><button class="btn btn-success">Edit</button></a></td>
        <td><a href="{{ route('services.delete',$services->id) }}" onclick="return confirm('Are You sure to Delete This?')"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
</table>
@endsection('content')
