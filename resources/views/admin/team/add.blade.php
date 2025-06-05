@extends('admin.admin')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg rounded-4 p-4" style="width: 100%; max-width: 500px;">
        <h3 class="text-center text-primary mb-4">Add New Team</h3>
        <form action="{{ route('team.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="icon" class="form-label">Icon</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="icon" name="icon" placeholder="e.g. fa-solid fa-star" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="name" name="name" placeholder="Enter Team Name" required>
            </div>

            <div class="mb-4">
                <label for="post" class="form-label">Post</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="post" name="post" placeholder="Enter Team Post" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control form-control-lg rounded-3" id="description" name="description" rows="3" placeholder="Brief description..." required></textarea>
            </div>

            <div class="mb-4">
                <label for="option" class="form-label">Options</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="option" name="option" placeholder="Enter extra options" required>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100 rounded-3">Save Service</button>
        </form>
    </div>
</div>
@endsection
