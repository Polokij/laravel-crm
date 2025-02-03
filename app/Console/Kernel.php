<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        if(config('app.debug')) {
            $schedule->call(function() {
                $tenantId  = config('app.tenant_id');
                Log::debug("Tenant #{$tenantId} Scheduler run");
            })->everyFiveMinutes();
        }

        $schedule->call(function() {
            \Artisan::queue('backup:clean')->onQueue('default');
        })->dailyAt('12:00');

        $schedule->call(function() {
            \Artisan::queue('backup:run')->onQueue('default');
        })->dailyAt('12:30');

        $schedule->command('inbound-emails:process')->everyFiveMinutes();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
