<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
    protected UserService $userService
    ) {}

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function show($id)
{
    $user = User::findOrFail($id);

    return view('admin.users.show', compact('user'));
}

    public function store(StoreUserRequest $request)
    {
        $this->userService->createUser($request->all());
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $this->userService->updateUser($user, $request->validated());
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $this->userService->deleteUser($user);
        return redirect()->route('users.index');
    }

}
