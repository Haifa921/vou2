<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payment extends Controller
{
    function submit(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:test_33ba900ab97072c475cb03d814f",
                          "X-Auth-Token:test_fe3e8f2d1ca804116733a6605f9"));
        $payload = Array(
            'purpose' => 'Buy Domain',
            'amount' => '100',
            'phone' => '9999999999',
            'buyer_name' => 'obada abo alnaser',
            'redirect_url' => 'http://127.0.0.1:8000/instamojo_redirect/',
            'send_email' => true,
            'send_sms' => true,
            'email' => 'foo@example.com',
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch); 
        
        $response=json_decode($response);
       return redirect($response->payment_request->longurl);
    }
    function instamojo_redirect(){
        echo '<pre>';
        print_r($_GET);


    }

    
}
