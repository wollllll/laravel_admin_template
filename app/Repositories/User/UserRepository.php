<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class UserRepository
{
    /** @var User */
    private $user;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /*
     |--------------------------------------------------------------------------
     | Get
     |--------------------------------------------------------------------------
     */
    /**
     * userをpaginateで取得
     * @param array $select
     * @return LengthAwarePaginator
     */
    public function getUsersPaginate(array $select): LengthAwarePaginator
    {
        return $this->user->select($select)->paginate();
    }

    /*
     |--------------------------------------------------------------------------
     | Create Update Destroy
     |--------------------------------------------------------------------------
     */

    /**
     * 保存処理
     * @param array $inputs
     * @return User
     */
    public function store(array $inputs): User
    {
        return $this->user->create($inputs);
    }
}
