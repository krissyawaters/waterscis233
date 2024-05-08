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
            return collect($episodeData)->map(function ($episode) use ($showNumber) {
                return Episode::firstOrCreate(
                    //We use firstOrCreate to prevent duplicate entries
                    [

                        'name' => $episode['name'],
                        'season' => $episode['season'],
                        'episode' => $episode['number'],
                        'image' => $episode['image']['original'] ?? null,
                        'summary' => strip_tags($episode['summary']),
                        'show_number' => $showNumber, 
                    ]
                );
            });
        } else {
            return collect([]);
        }
    }
}
