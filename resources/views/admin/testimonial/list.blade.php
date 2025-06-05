@extends('admin.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection
@section('content')
<table class="table table-bordered">
    <tr>
        <th>Start</th>
        <th>Description</th>
        <th>Name</th>
        <th>Add</th>
        <th>Service</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($testimonial as $testimonial)
    <tr>
        <td>{{ $testimonial->start }}</td>
        <td>{{ $testimonial->description }}</td>
        <td>{{ $testimonial->name }}</td>
        <td>{{ $testimonial->add }}</td>
        <td>{{ $testimonial->service }}</td>

        <td><a  href="{{ route('testimonial.edit', $testimonial->id) }}"><button class="btn btn-success">Edit</button></a></td>
        <td><a href="{{ route('testimonial.delete',$testimonial->id) }}" onclick="return confirm('Are You sure to Delete This?')"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
</table>
@endsection('content')
