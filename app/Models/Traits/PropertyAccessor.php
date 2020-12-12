<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;

trait PropertyAccessor
{
    /**
     * テーブル名取得Trait
     * @return string
     */
    public static function table(): string
    {
        $model = new static;

        return $model->getTable();
    }
}
