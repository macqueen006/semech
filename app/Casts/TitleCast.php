<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Str;

class TitleCast implements CastsAttributes
{
    //assessor
    public function set($model, string $key, $value, array $attributes)
    {
        return Str::lower($value);
    }

    //mutator
    public function get($model, string $key, $value, array $attributes)
    {
        return Str::ucfirst($value);
    }
}
