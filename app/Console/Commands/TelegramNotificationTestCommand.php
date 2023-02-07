<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TelegramNotificationTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:send-telegram';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Telegram Notification Test Command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
