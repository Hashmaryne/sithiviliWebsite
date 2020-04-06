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
     /*    Log::emergency($password);
        Log::emergency($username); */
        //$client = new \GuzzleHttp\Client();

        // $response = $client->post('http://127.0.0.1:8000', [
        //     'form_params' => [
        //         'username' => $username,
        //         'password' => $password,
        //         'action' => 'submit'
        //     ],
            
        // ]
        //);  
        
        $client = new \GuzzleHttp\Client(["base_uri" => "https://sithivili.azurewebsites.net" ]);
            $fields = [
                'json' => [
                    "username" => "$username",
                    "password" => "$password"
                ],

                'headers'=> ['Accept' => 'application/json']
               ];
        $response = $client->post("/api/users/user/password/reset", $fields);
        echo $response->getBody();

        /* $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://sithivili.azurewebsites.net/api/users/user/password/reset', [
            'json' => [
                "username" => "$username",
                "password" => "$password"
            ]
        ]); */
    


/*         $client = new \GuzzleHttp\Client();
        $url = "http://127.0.0.1:8000";
        $response = $client->post($url, [
            'form_params' => [
                'username' => $request->get('username'),
                'password' => $request->get('password'),

            ]
        ]); */
        // print_r($password);
        // print_r($username);
    }
}
