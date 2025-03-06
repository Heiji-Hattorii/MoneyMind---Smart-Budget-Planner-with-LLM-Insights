<?php

use Illuminate\Foundation\Inspiring;
use App\Http\Controllers\BudgetController;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
/** @var \Illuminate\Console\Scheduling\Schedule $schedule */


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

app(Schedule::class)->call(function (){
     $users = User::all();
            foreach ($users as $user) {
                $todayDay = now()->day;
                $creditDay = Carbon::parse($user->date_credit)->day;
                if ($todayDay === $creditDay) {
                $user->budget += $user->salaire;
                $user->save();
            }
        }
    
})->cron('40 14 * * *');