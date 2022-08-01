<?php

namespace App\Listeners;

use App\Events\LoginHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StoreUser
{
    public $user;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        // 
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\LoginHistory  $event
     * @return void
     */
    public function handle(LoginHistory $user)
    {
        $current_timestamp = Carbon::now()->toDateTimeString();
        $userinfo = $user->user;

        $saveHistory = DB::table('users_login_history')->insert(
            ['name' => $userinfo->name, 'email' => $userinfo->email,'status'=>1 ,'login_time'=>$current_timestamp,'created_at' => $current_timestamp, 'updated_at' => $current_timestamp]
        );
        return $saveHistory;
    }
}