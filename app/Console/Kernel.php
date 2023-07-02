<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        // $schedule->call(function () {
        //     $SERVER_API_KEY = 'AAAAMFlP6ec:APA91bFJTNjjwRbAKn6gUrVgrutQA5eBn3i2ieFhKIL5lJQy-dVdntMcJ7ryNx79BAcYkgxizbpnnmeuXLL-E7jHO9hCZLykOgbMOrrMu_a9PlwPZHDkLUZQWegigh8Q7i9hfJGP1Bb7';

        //     $token_1 = 'daiE32YOQZ2_xpP4ZYnaaf:APA91bFcYkPO_AtmQ4AHkDOVVEPFOXR0KBLRhOr7DhYGxEMKspvnqMPh5Bm-lX9QFwJvEe0H_wlO4PPUhvlwYn7J5FItT0r0j-OopHF_IPAYGmqSQ7Soi_OhtnAZELj6ygk939n8f26D';

        //     $data = [

        //         "registration_ids" => [
        //             $token_1
        //         ],

        //         "notification" => [

        //             "title" => 'Welcome',

        //             "body" => 'Description',

        //             "sound"=> "default" // required for sound on ios

        //         ],

        //     ];

        //     $dataString = json_encode($data);

        //     $headers = [

        //         'Authorization: key=' . $SERVER_API_KEY,

        //         'Content-Type: application/json',

        //     ];

        //     $ch = curl_init();

        //     curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

        //     curl_setopt($ch, CURLOPT_POST, true);

        //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //     curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        //     $response = curl_exec($ch);

        //     dd($response);
        // })->everyMinute();

        // $schedule->command('inspire')->hourly();
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
