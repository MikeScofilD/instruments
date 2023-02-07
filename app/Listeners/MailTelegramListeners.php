<?php

namespace App\Listeners;

use App\Events\MailTelegramEvents;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MailTelegramListeners
{
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
     * @param  object  $event
     * @return void
     */
    public function handle(MailTelegramEvents $event)
    {
        $current_timestamp = Carbon::now()->toDateTimeString();

        $userinfo = $event->user;

        $saveHistory = DB::table('login_history')->insert(
            ['name' => $userinfo->name, 'surname' => $userinfo->surname, 'email' => $userinfo->email, 'created_at' => $current_timestamp, 'updated_at' => $current_timestamp]
        );
        return $saveHistory;

    }
}
