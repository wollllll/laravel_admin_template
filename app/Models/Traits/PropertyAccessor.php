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

    /**
     * fillable取得Trait
     * @return array|null
     */
    public static function columns(): ?array
    {
        static $columns;

        if (!empty($columns)) return $columns;

        $model = new static;
        if (!$model instanceof Model) return null;

        $columns = $model->getFillable();

        return $columns;
    }

    /**
     * fillable取得Trait 指定カラムを除いて取得
     * @param array $except
     * @return array|null
     */
    public static function exceptColumns(array $except): ?array
    {
        return array_filter(self::columns(), function ($column) use ($except) {
            return !in_array($column, $except);
        });
    }
}
