<?php

namespace App\Http\Controllers;

use App\Paypal;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function access()
    {
        // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.paypal.com/v1/oauth2/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        curl_setopt($ch, CURLOPT_USERPWD, 'AQC92vxvsityhXzRyjtlRCjNIm7KtW6CMNA9ZbgvjkMFooxk77HXKi0pDNi64uy4nbSlf5fVAZZFYysE' . ':' . 'EJXdCZTFxaF1t3tmnP7IMpGaEW9bfWATKB6OBw2JhyLOgM8LW4WJ-V7p90jtLghMJ_DdejV8-L4nGd7e');

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Accept-Language: en_US';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        dd($result);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

    }
}
