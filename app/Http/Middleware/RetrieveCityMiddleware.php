<?php

namespace App\Http\Middleware;

use App\CitiesHelper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class RetrieveCityMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $city = $this->retrieveCity($request);
        session()->put('city', $city ?? config('cities.default'));

        return $next($request);
    }

    protected function retrieveCity(Request $request): string
    {
        $city = $request->route('city');
        if ($city === null) {
            $city = $this->extractCityFromUrl($request->url());
        }

        if (in_array($city, CitiesHelper::cities())) {
            return $city;
        }

        return config('cities.default');
    }

    protected function extractCityFromUrl(string $url): string
    {
        $matches = [];
        preg_match('/https?:\/\/(\w*)\.?'.config('app.domain').'/', $url, $matches);

        return Arr::get($matches, 1, '');
    }
}
