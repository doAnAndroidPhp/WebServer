<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\Maileble;
class SendMailController extends Controller
{
    public function send()
	{
		SendMailJob::dispatch(); // thuc thi tac vu
	    echo "Da gui email thanh cong";
	}
}
