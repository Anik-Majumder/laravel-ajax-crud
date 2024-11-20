<?php

namespace App\Providers;

use App\Models\Header;
use App\Models\Project;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('frontend.header', function ($view) {
            $header = Header::first();
            $view->with('header', $header);
        });

        view()->composer('frontend.project-card', function ($view) {
            $project = Project::first();
            $view->with('project', $project);
        });
    }
}
