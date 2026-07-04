@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Users</h3>
        </div>

        <div class="card-body">
            <p>Welcome to Users Page.</p>
        </div>
    </div>
</div>

<div class="container mt-3 ">
    <a href="{{route('users.create')}}" class="btn btn-primary">+Create User</a>
</div>


<div class="container mt-3">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">
                    Edit
                </a>

                <form action="{{ route('users.destroy', $user->id) }}"
                    method="POST"
                    class="d-inline-block"
                    onsubmit="return confirm('Are you sure you want to delete this user?')">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
