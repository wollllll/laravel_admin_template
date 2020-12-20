<?php

namespace App\Services;

use App\Repositories\User\UserRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserService
{
    /** @var UserRepository  */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param array $inputs
     * @return LengthAwarePaginator
     */
    public function getPaginate(array $inputs): LengthAwarePaginator
    {
        return $this->userRepository->getPaginate($inputs);
    }
}
