<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
   public function api() {

        // $api = Http::get('');
        // $apiArray = $api->json();

        $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/todos/1');
            curl_setopt($ch, CURLOPT_HEADER, TRUE);
            curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $head = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
        return view('api', $head);
   }
}
