<?php

use Illuminate\Support\Facades\Route;
use App\Models\TvMazeAPI; 
use App\Models\Episode;

Route::get('/load-episodes', function () {
    $showNumber = request('showNumber', 1); 
    $episodes = TvMazeAPI::fetch($showNumber); 

    return view('episodes.index', ['episodes' => $episodes]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view-episodes', function (Illuminate\Http\Request $request) {
  
    $showNumber = $request->query('showNumber', 1);

    $episodes = Episode::where('show_number', $showNumber)->get();

    return view('episodes.index')->with('episodes', $episodes);
});