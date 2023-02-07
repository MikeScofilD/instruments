<?php

namespace App\Console\Commands;

use App\Mail\User\UserCreatedMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailNotificationTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:send-email {--user=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mail Notification Test Command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // dd($this->option('user'));
        echo 'MailNotificationTestCommand';
        $email = 'test@mail.com';
        $result = Mail::to('test@mail.com')->send(new UserCreatedMail($email));
        // dd($result);
        return Command::SUCCESS;

    }
}
