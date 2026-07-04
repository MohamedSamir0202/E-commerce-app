@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Edit Users</h3>
        </div>
    </div>

</div>

<div class="container mt-3 ">
    <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
</div>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow rounded">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center">Edit User</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter your name"
                                value="{{old('name', $user->name)}}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{old('email', $user->email)}}"
                                placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Enter your password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Confirm Password
                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Enter your password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Role
                            </label>

                            <select name="role" class="form-select">

                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                                    Admin
                                </option>

                                <option value="castomer" {{ $user->role == 'castomer' ? 'selected' : '' }}>
                                    Customer
                                </option>

                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Update User
                            </button>
                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
