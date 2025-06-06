@extends('admin.admin')

@section('content')
<div class="container py-5">
    <div class="card shadow rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-body p-4">
            <h3 class="mb-4 text-center text-success">Update Subservice</h3>

            <form action="{{ route('subservices.update', $subservices->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="service_id" class="form-label">service_id</label>
                    <textarea class="form-control" id="service_id" name="service_id" rows="3" required>{{ $subservices->service_id }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $subservices->name }}" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
