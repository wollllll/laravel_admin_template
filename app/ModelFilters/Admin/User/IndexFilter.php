<?php

namespace App\ModelFilters\Admin\User;

use EloquentFilter\ModelFilter;
use Illuminate\Support\Arr;

class IndexFilter extends ModelFilter
{
    /**
     * @param string $value
     * @return IndexFilter
     */
    public function name(string $value): IndexFilter
    {
        return $this->where('name', 'LIKE', castForMiddleMatchString($value));
    }

    /**
     * @param string $value
     * @return IndexFilter
     */
    public function email(string $value): IndexFilter
    {
        return $this->where('email', 'LIKE', castForMiddleMatchString($value));
    }

    /**
     * @param array $params
     * @return array
     */
    public static function indexParams(array $params): array
    {
        return [
            'name' => castForString(Arr::get($params, 'name')),
            'email' => castForString(Arr::get($params, 'email')),
        ];
    }
}
