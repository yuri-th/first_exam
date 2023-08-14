<?php

namespace App\Console;

use App\Models\Attendance;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
    //    $schedule->call(function () {
    //     // リセット処理を実行するメソッドを呼び出す
    //    Attendance::resetAttendanceData();

    // })->dailyAt('00:00'); // 毎日0時に実行

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
