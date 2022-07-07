<?php

namespace App\Http\Controllers;

use App\Account;
use App\Notifications\NEWACCOUNT;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Notification;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function autoCreate($user_id){
        $accounts = Account::orderBy('created_at', 'desc')->first();
        if($accounts){
            $last_account_num = $accounts->account_number ;
        }else {
            $last_account_num = '10604802003';
        }

        $account_num = (int)$last_account_num + 1;

        $save = Account::create(['user_id' => $user_id, 'account_number' => $account_num]);

        $user = User::findOrFail($user_id);
        $user_email = $user->email;

        $data = ['user' => $user, 'account' => $save];

//        Mail::to($user->email)->send( new NewAccount($data));
        Notification::route('mail', $user_email)->notify(new NEWACCOUNT($data));
        $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
        $client = new \Nexmo\Client($basic);

        $receiverNumber = $user->country_code.$user->phone;
        $message = "Your account with Nations Star Bank PLC has been created, check email for more information";

        $message = $client->message()->send([
            'to' => $receiverNumber,
            'from' => 'Vonage APIs',
            'text' => $message
        ]);

    }


}
