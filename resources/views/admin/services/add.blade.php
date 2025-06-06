@extends('admin.admin')

@section('content')
<div class="container py-5">
    <div class="card shadow rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-body p-4">
            <h3 class="mb-4 text-center text-primary">Add New Service</h3>
            <form action="{{ route('services.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter service Name" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Brief description..." required></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">Save Service</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
