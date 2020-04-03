<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Guzzle\Http\Client as GuzzleClient;
use Guzzle\Plugin\Cookie\Cookie;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;

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
      
        //$client = new \GuzzleHttp\Client();

        // $response = $client->post('http://127.0.0.1:8000', [
        //     'form_params' => [
        //         'username' => $username,
        //         'password' => $password,
        //         'action' => 'submit'
        //     ],
            
        // ]
        //);  
        
        $client = new \GuzzleHttp\Client(["base_uri" => "http://127.0.0.1:8000" ]);
            $fields = [
                'json' => [
                    "username" => "$username",
                    "password" => "$password"
                ],

                'headers'=> ['Accept' => 'application/json']
               ];
        $response = $client->post(" ", $fields);
        echo $response->getBody();
 
        /* print_r($password);
        print_r($username); */
    }
}
