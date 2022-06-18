<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use Illuminate\Support\Facades\Http;

Route::get('/show', function () {

return view('api');
});


Route::get('/search', function () {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/todos/1');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $head = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $head = json_decode($head, TRUE);

return view('search', compact('head'));
});


