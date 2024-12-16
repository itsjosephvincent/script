<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScriptController extends Controller
{
    public function store(Request $request)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer 270710|jMOVpOk77P1B78vkCCjXu5nPxdsYdiysUN1A85oC871b08a3'
        ])->post('https://phpstack-1323887-4841195.cloudwaysapps.com/api/usher/bets/bb494ed5-7a9a-4c07-88f4-6e67aa41ee3d', [
            'combinations' => [
                [
                    'index' => 0,
                    'combination' => '111',
                    'amount' => '20'
                ],
                [
                    'index' => 0,
                    'combination' => '121',
                    'amount' => '10'
                ],
                [
                    'index' => 0,
                    'combination' => '131',
                    'amount' => '15'
                ],
                [
                    'index' => 0,
                    'combination' => '141',
                    'amount' => '20'
                ],
                [
                    'index' => 0,
                    'combination' => '151',
                    'amount' => '5'
                ],
                [
                    'index' => 0,
                    'combination' => '161',
                    'amount' => '5'
                ],
                [
                    'index' => 0,
                    'combination' => '171',
                    'amount' => '10'
                ]
            ]
        ]);

        return $response;
    }
}
