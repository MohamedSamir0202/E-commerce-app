@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Create Users</h3>
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
                    <h4 class="mb-0 text-center">Create User</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
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
                                <option value="admin">Admin</option>
                                <option value="castomer">Castomer</option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Save User
                            </button>
                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
