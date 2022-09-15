<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Helper;
use App\SiteManagement;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\RecurringPaymentCron::class,
        Commands\StripeSubscription::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(
            function () {
                Helper::updatePayouts();
            }
        )->everyMinute();

        $payout_settings = SiteManagement::getMetaValue('commision');
        $payment_gateway = !empty($payout_settings) && !empty($payout_settings[0]['payment_method']) ? $payout_settings[0]['payment_method'] : array();
        if( isset($payment_gateway) && in_array('paytab',$payment_gateway)){
            $schedule->command('recurring-payment:cron')
            ->everyMinute();
        }

        if( isset($payment_gateway) && in_array('stripe',$payment_gateway)){
            $schedule->command('stripe-subscription:cron')
            ->everyMinute();
        }


    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
