<?php

use Illuminate\Support\Facades\Route;
use App\Models\TvMazeAPI; 

Route::get('/episodes', function () {
    $showNumber = request('showNumber', 1); 
    $episodes = TvMazeAPI::fetch($showNumber); 

    return view('episodes.index', ['episodes' => $episodes]);
});

Route::get('/', function () {
    return view('welcome');
});