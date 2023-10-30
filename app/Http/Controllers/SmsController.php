<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IPPanel\Client;

class SmsController extends Controller
{
    public function SendSmsSingUp($PhoneNumber,$FullName,$Password){

        $client = new Client("pF-rVvosQ19AgswQVfClvUSLwboB_F6fSbaQ3H4z0jk=");
        $client->sendPattern("79qkp2j9rg6d2rk","+9890000145",$PhoneNumber,[
            "name" => $FullName,
            "Password" => $Password
        ]);
    }
}
