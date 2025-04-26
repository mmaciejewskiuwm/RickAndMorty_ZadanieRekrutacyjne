<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class RickAndMortyApiService
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getCharacters(): array
    {
        $allCharacters = [];
        $currentPage = 1;

        do {
            $response = $this->client->request(
                'GET',
                'https://rickandmortyapi.com/api/character/?page=' . $currentPage
            );
            $data = $response->toArray();

            if (!isset($data['results'])) {
                break;
            }

            $allCharacters = array_merge($allCharacters, $data['results']);
            $currentPage++;
        } while (!empty($data['info']['next']));

        //funkcja obcina url odcinka i zostawia tylko numer
        foreach ($allCharacters as &$character) {
            $character['episode_numbers'] = array_map(function ($episodeUrl) {
                $segments = explode('/', $episodeUrl);
                return (int) end($segments);
            }, $character['episode']);
        }

        return $allCharacters;
    }
}
