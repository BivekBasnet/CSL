@extends('admin.admin')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg rounded-4 p-4" style="width: 100%; max-width: 500px;">
        <h4 class="text-center text-primary mb-4">Update Team Member</h4>

        <form action="{{ route('team.update', $team->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="icon" class="form-label">Icon</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="icon" name="icon" value="{{ $team->icon }}" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="name" name="name" value="{{ $team->name }}" required>
            </div>

            <div class="mb-3">
                <label for="post" class="form-label">Post</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="post" name="post" value="{{ $team->post }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="description" name="description" value="{{ $team->description }}" required>
            </div>

            <div class="mb-4">
                <label for="option" class="form-label">Option</label>
                <input type="text" class="form-control form-control-lg rounded-3" id="option" name="option" value="{{ $team->option }}" required>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100 rounded-3">Update</button>
        </form>
    </div>
</div>
@endsection
