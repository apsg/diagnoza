<?php
namespace App\Console\Commands;

use App\Mail\ContactMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestMailCommand extends Command
{
    protected $name = 'test:mail';

    protected $description = 'Send a test email to the configured recipient';

    public function handle()
    {
        Mail::to('szymon.gackowski@gmail.com')
            ->send(new ContactMail('test', 'test@test.pl'));
    }
}
