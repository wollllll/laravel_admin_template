<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    /** @var User  */
    private $user;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param array $eagerLoad
     * @return Builder[]|Collection
     */
    public function getAll(array $eagerLoad): Collection
    {
        return $this->user->with($eagerLoad)->get();
    }
}
