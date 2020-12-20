<?php

namespace App\Repositories\User;

use App\ModelFilters\Admin\User\IndexFilter;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

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
     * @param array $inputs
     * @return LengthAwarePaginator
     */
    public function getPaginate(array $inputs): LengthAwarePaginator
    {
        return $this->user
            ->filter(IndexFilter::indexParams($inputs), IndexFilter::class)
            ->paginate(10);
    }
}
