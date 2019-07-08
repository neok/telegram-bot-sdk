<?php

namespace Neok\Telegram;

use Neok\Telegram\HttpClient\GuzzleHttpClient;
use Neok\Telegram\HttpClient\HttpClientInterface;

class Api
{
    protected $client;

    protected $accessToken;

    public function __construct(string $accessToken, ?HttpClientInterface $client)
    {
        $this->accessToken = $accessToken;
        if (!$client) {
            $client = new GuzzleHttpClient();
        }
        $this->client = $client;
    }


}

