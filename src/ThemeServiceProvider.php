<?php

namespace Ophim\Theme\VietPhimTV;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function register()
    {
        config(['ophim.themes' => array_merge(config('ophim.themes', []), [
            'vietphimtv' => 'VietphimTV'
        ])]);
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/theme', 'ophim_themes');
    }
}
