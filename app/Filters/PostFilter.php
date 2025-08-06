<?php

namespace App\Filters;

class PostFilter extends QueryFilter
{
    public function title(string $value): void
    {
        // goog performance, index used
        $this->builder->where('title', '=', $value);
    }

    public function titleContains(string $value): void
    {
        // bad performance, index not used
        $this->builder->where('title', 'like', "%$value%");
    }
}
