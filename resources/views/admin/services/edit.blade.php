@extends('admin.admin')

@section('content')
<div class="container py-5">
    <div class="card shadow rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-body p-4">
            <h3 class="mb-4 text-center text-success">Update Service</h3>

            <form action="{{ route('services.update', $services->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $services->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $services->description }}</textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
