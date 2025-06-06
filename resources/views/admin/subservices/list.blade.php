@extends('admin.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection
@section('content')
<table class="table table-bordered">
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($subservices as $subservices)
    <tr>
        <td>{{ $subservices->service_id }}</td>
        <td>{{ $subservices->name }}</td>
        <td><a href="{{ route('subservices.edit', $subservices->id) }}"><button class="btn btn-success">Edit</button></a></td>
        <td><a href="{{ route('subservices.delete',$subservices->id) }}" onclick="return confirm('Are You sure to Delete This?')"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
</table>
@endsection('content')
