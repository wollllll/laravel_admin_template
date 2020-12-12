<?php

namespace App\Services;

use App\Repositories\User\UserRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    /** @var UserRepository  */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param array $eagerLoad
     * @return Builder[]|Collection
     */
    public function getAll(array $eagerLoad = []): Collection
    {
        return $this->userRepository->getAll($eagerLoad);
    }
}
