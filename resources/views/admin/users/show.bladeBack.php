@extends('admin.layouts.app')

@section('title', 'User Details')

@section('content')

<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">User Details</h4>
        </div>

        <div class="card-body">

            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ $user->role }}</p>
            <p><strong>Created At:</strong> {{ $user->created_at }}</p>

            <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">
                Back
            </a>

        </div>
    </div>

</div>

@endsection
