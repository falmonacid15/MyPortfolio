<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

class HomeController extends Controller
{
    public function getAllRepositories()
    {
        $guzzle = new Client([
            'base_uri' => 'https://api.github.com',
            'headers' => [
                'Authorization' => 'Bearer ' . config('app.github_token')
            ]
        ]);
        $response = $guzzle->get('/users/falmonacid15/repos');

        $repositories = collect(json_decode($response->getBody()));

        $topics = [];

        foreach ($repositories as $repository){
            $topics[] = $repository->topics;
        }
        $technologies = array_unique(array_merge([], ...$topics));
        $languages = array_diff($technologies, ['laravel', 'api', 'bootstrap', 'css', 'html5', 'jquery', 'html']);

        return view('frontend.home', compact('repositories', 'technologies', 'languages'));
    }
}
