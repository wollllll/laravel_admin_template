<?php

namespace App\Services;

use App\Repositories\User\UserRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    /** @var UserRepository  */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getPaginate(): LengthAwarePaginator
    {
        return $this->userRepository->getPaginate();
    }
}
