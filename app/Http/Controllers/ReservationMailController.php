<?php
namespace App\Http\Controllers;
// use App\Http\Controllers\Mail;

use Illuminate\Http\Request;

class ReservationMailController extends Controller
{
    function sendMail(){
        $details=[
            'title'=>'Confirm Reservation',
            'body'=>'Your Reservation hasbeen confirmed'
        ];

        Mail::to("mohammedmohsin0725@gmail.com")->send(new ReservationMail($details));
        return "Email Sent";
    }
}
