@extends('admin.admin')

@section('content')
<div class="container py-5">
    <div class="card shadow rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-body p-4">
            <h3 class="mb-4 text-center text-primary">Add New Subservice</h3>
            <form action="{{ route('subservices.store') }}" method="POST">
                @csrf

                <select name="service_id" required>
                    <option value="">-- Select Service --</option>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                </select>


                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <textarea class="form-control" id="name" name="name" rows="3" placeholder="list" required></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">Save Service</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
