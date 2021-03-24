<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
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
        $users = $this->service->getUsersPaginate(User::exceptColumns(['id', 'password']));

        return view('admin.users.index', compact('users'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View
    {
        return view('admin.users.create');
    }

    /**
     * @param StoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        return redirect(route('admin.users.index'));
    }

    /**
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('admin.users.show', compact('user'));
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
