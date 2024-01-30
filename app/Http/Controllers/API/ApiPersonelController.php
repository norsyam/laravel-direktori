<?php

namespace App\Http\Controllers\API;

use App\Models\Personel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\API\BaseController;

class ApiPersonelController extends BaseController
{
    //
    public function personel(Request $request)
    {
        $no_kp = $request->no_kp;
        $personel = Personel::where('no_kp','=',$no_kp)->first();
        // $this->log_keluar();
        if(isset($personel))
        {
            return $this->sendResponse($personel,'Data Personel');
        }else{
            return $this->sendError('Tiada Data.', ['error'=>'Tiada Error, Cuma Tiada Data']);
        }
    }

    public function personel_list()
    {
        $personel = Personel::
            select('no_kp')
            ->get()->toArray();
        // $this->log_keluar();
        if(isset($personel))
        {
            return $this->sendResponse($personel,'Data Personel');
        }else{
            return $this->sendError('Tiada Data.', ['error'=>'Tiada Error, Cuma Tiada Data']);
        }
    }

    public function personel_luar(Request $request)
    {
        $url_login = env('URL_RAIHAN').'/api/login';
        $headers = [
            'Accept' => 'application/json',
        ];
        $postInput = [
            "email" => env('EMAIL_RAIHAN'),
            "password" => env('PASSWORD_RAIHAN')
        ];

        $response_login = Http::timeout(15)
            ->withHeaders($headers)
            ->withOptions(['verify'=>false])
            ->post($url_login, $postInput);
        $login = json_decode($response_login);
        // return $request->no_kp;

        $headers = [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$login->data->token
        ];

        $post = [
            "no_kp" => $request->no_kp
        ];

        $url = env('URL_RAIHAN').'/api/personel';

        $response = Http::timeout(15)
        ->withHeaders($headers)
        ->withOptions(['verify'=>false])
        ->post($url, $post);

        //$response;
        $response = json_decode($response);
        return $response;


    }

    public function personel_luar_list()
    {
        $url_login = env('URL_RAIHAN').'/api/login';
        $headers = [
            'Accept' => 'application/json',
        ];

        $postInput = [
            "email" => env('EMAIL_RAIHAN'),
            "password" => env('PASSWORD_RAIHAN')
        ];

        $response_login = Http::timeout(15)
            ->withHeaders($headers)
            ->withOptions(['verify'=>false])
            ->post($url_login, $postInput);
        $login = json_decode($response_login);
        // return $request->no_kp;

        $headers = [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$login->data->token
        ];

        // $post = [
        //     "no_kp" => $request->no_kp
        // ];

        $url = env('URL_RAIHAN').'/api/personel-list';

        $response = Http::timeout(15)
        ->withHeaders($headers)
        ->withOptions(['verify'=>false])
        // ->post($url, $post);
        ->get($url);

        //$response;
        $response = json_decode($response);
        return $response;


    }


    private function log_keluar()
    {
        $user = Auth::user();
        $user->tokens()->delete();
    }
}
