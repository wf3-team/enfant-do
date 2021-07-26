<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService 
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }


    public function getHopitaux(): array
    {
        // stoque la réponse de notre appel à l'api
        $response = $this->client->request(
            'GET',
            'https://www.data.gouv.fr/fr/datasets/r/235d5a2a-7b23-46fc-a96e-7d926781ddb4'
        );
        // Conversion en array
        return $response->toArray();
    }
}