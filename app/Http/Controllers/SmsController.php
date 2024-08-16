<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio\Rest\Client;

class SmsController extends Controller
{
    //

    public function sendSms(Request $request)
    {

        $request->validate([
            'phone' => 'required',
            'message' => 'required'
        ]);

        $receiver_number ='+244'.$request->phone;
        $messagem = $request->message;


        try {

            $sid = getenv("TWILIO_SID");
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio = new Client($sid, $token);
            $sendnumber = getenv("TWILIO_PHONE_NUMBER");

            $message = $twilio->messages
                ->create(
                    $receiver_number //to
                    ,
                    [
                        "from" => $sendnumber,
                        "body" => $messagem
                    ]

                );

            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
