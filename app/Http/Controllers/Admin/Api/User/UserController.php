<?php

namespace App\Http\Controllers\Admin\Api\User;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

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
     * @return JsonResponse
     */
    public function getPaginate(): JsonResponse
    {
        $users = $this->service->getPaginate();

        return response()->json(['users' => $users]);
    }
}
