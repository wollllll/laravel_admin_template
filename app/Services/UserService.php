<?php

namespace App\Services;

use App\Repositories\User\UserRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

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
     * userをpaginateで取得
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

    /**
     * 保存処理
     * @param array $inputs
     */
    public function store(array $inputs)
    {
        try {
            DB::beginTransaction();

            $this->userRepository->store($inputs);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            abort(500, $e->getMessage());
        }
    }
}
