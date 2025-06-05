@extends('admin.admin')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg rounded-4 p-4" style="width: 100%; max-width: 500px;">
        <h4 class="text-center text-primary mb-4">Edit Testimonial</h4>

        <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="start" class="form-label">Start</label>
                <input type="number" class="form-control form-control-lg rounded-3" id="start" name="start" value="{{ $testimonial->start }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="description" name="description" value="{{ $testimonial->description }}" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="name" name="name" value="{{ $testimonial->name }}" required>
            </div>

            <div class="mb-3">
                <label for="add" class="form-label">Add</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="add" name="add" value="{{ $testimonial->add }}" required>
            </div>

            <div class="mb-4">
                <label for="service" class="form-label">Service</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="service" name="service" value="{{ $testimonial->service }}" required>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100 rounded-3">Update</button>
        </form>
    </div>
</div>
@endsection
