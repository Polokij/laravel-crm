<?php

namespace App\Providers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::macro('assetUrl', function ($path) {
            return Storage::providesTemporaryUrls()
                ? Storage::temporaryUrl($path, \now()->addMinutes(5))
                : Storage::url($path);
        });

        Storage::macro('assetDownload', function ($path) {
            return Storage::providesTemporaryUrls()
                ? response()->redirectTo(Storage::temporaryUrl($path, \now()->addMinutes(5)))
                : Storage::download($path);
        });
    }
}
