<?php

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        $settings = Cache::remember('app_settings', 60 * 60, function () {
            return (array) DB::table('settings')->first();
        });

        return $settings[$key] ?? $default;
    }

    if (!function_exists('categories')) {
    function categories() {
        return cache()->remember('categories', 60 * 60, function () {
            return Category::where('status', 1)
                ->orderBy('en_category_name', 'asc')->limit(6)
                ->get();
        });
    }

}}
