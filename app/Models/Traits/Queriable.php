<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Queriable
{

    public function scopeQueriable(Builder $query)
    {
        $this->makeSearchQuery($query);
        $this->makeOrderQuery($query);
    }

    private function makeSearchQuery(Builder $query)
    {
        $query->when(request()->input('search'), function ($query) {
            return $query->where(function ($query2) {
                foreach (self::searchableAtts() as $att) {
                    $query2->orWhere($att, 'like', "%" . request()->input('search') . "%");
                }
            });
        });
        return $query;
    }

    public static function searchableAtts(): array
    {
        return [];
    }

    private function makeOrderQuery(Builder $query)
    {
        $order   = request()->input('order') === 'asc' ? 'asc' : 'desc';
        $orderBy = request()->input('orderBy');
        if ($orderBy && in_array($orderBy, self::orderableAtts())) {
            $query->orderBy($orderBy, $order);
        }
        return $query;
    }

    public static function orderableAtts(): array
    {
        return [];
    }
}
