<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Symfony\Component\Yaml\Yaml;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.*', function (View $view) {
            $breadcrumb = Arr::get(Yaml::parse(file_get_contents(resource_path(config('breadcrumbs.file')))), $view->getName());

            $view->with(['pageTitle' => Arr::get($breadcrumb, 'title')]);
        });
    }
}
