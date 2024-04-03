<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class TVMazeAPI
{
    public static function fetch($showNumber)
    {
        $response = Http::get("https://api.tvmaze.com/shows/{$showNumber}/episodes");

        if ($response->successful()) {
            $episodeData = $response->json();
            return collect($episodeData)->map(function ($episode) {
              
                return new Episode(
                    $episode['name'],
                    $episode['image']['original'] ?? null,
                    $episode['season'],
                    $episode['number'],
                    $episode['summary']
                );
            });
        } else {
            
            return collect([]);
        }
    }
}