<?php

namespace App\Services;

use App\Repositories\User\UserRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserService
{
    /** @var UserRepository */
    private $userRepository;

    /**
     * UserService constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /*
     |--------------------------------------------------------------------------
     | Get
     |--------------------------------------------------------------------------
     */
    /**
     * @param array $select
     * @return LengthAwarePaginator
     */
    public function getUsersPaginate(array $select = ['*']): LengthAwarePaginator
    {
        return $this->userRepository->getUsersPaginate($select);
    }

    /*
     |--------------------------------------------------------------------------
     | Create Update Destroy
     |--------------------------------------------------------------------------
     */
}
