<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class UserController extends Controller
{
    /** @var UserService  */
    private $service;

    /**
     * UserController constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @return Application|Factory|View
     */
    public function index(): View
    {
        $users = $this->service->getUsers();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {

    }

    public function show(User $user)
    {
        dd($user);
    }

    public function edit(User $user)
    {
        dd($user);
    }

    public function update(User $user)
    {
        dd($user);
    }

    public function destroy(User $user)
    {
        dd($user);
    }
}
