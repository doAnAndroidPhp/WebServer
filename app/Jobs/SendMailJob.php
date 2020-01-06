<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\Maileble;
class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
            $objMail = new \stdClass();
            $objMail->nguoi_nhan = 'tung';
            $objMail->nguoi_gui = 'tung2';
            $objMail->nam_sinh = '1999';
            $objMail->noi_sinh = 'Lam Dong';

            Maill::to("tungtrana3@gmail.com")->send(new Maileble($objMail));
    }
}
