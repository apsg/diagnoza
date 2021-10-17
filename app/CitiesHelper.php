<?php
namespace App;

use Illuminate\Support\Arr;

class CitiesHelper
{
    public static function get(string $key)
    {
        $city = session()->get('city', 'krakow');

        return config('cities.' . $city . '.' . $key);
    }

    public static function cities() : array
    {
        return array_filter(array_keys(config('cities')), function ($item) {
            return $item !== 'default';
        });
    }
}
