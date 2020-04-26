<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Guzzle\Http\Client as GuzzleClient;
use Guzzle\Plugin\Cookie\Cookie;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ResetPasswordsController extends Controller
{
    public function displayPage($user)
    {

        return view ('reset-password');
    }

    public function postResetPass(Request $request)
    {
     
        $password=$request->input('password');
        $username=$request->input('username');
        
        $client = new \GuzzleHttp\Client(["base_uri" => "https://sithivili.azurewebsites.net" ]);
            $fields = [
                'json' => [
                    "username" => "$username",
                    "password" => "$password"
                ],

                'headers'=> ['Accept' => 'application/json']
               ];
        $response = $client->post("/api/users/user/password/reset", $fields);
        //echo $response->getBody();

        if ($response->getBody()=="true")
        {
            return view('password-success');
        }
        else
        {
            return view('error-message');
        }


    }
}
