<?php

namespace App\Http\Controllers\Admin\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\User\GetPaginate;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** @var UserService */
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
     * @param Request $request
     * @return JsonResponse
     */
    public function getPaginate(Request $request): JsonResponse
    {
        $users = $this->service->getPaginate($request->query());

        return response()->json(['users' => $users]);
    }
}
