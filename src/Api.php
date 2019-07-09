<?php

namespace Neok\Telegram;

use Neok\Telegram\HttpClient\GuzzleHttpClient;
use Neok\Telegram\HttpClient\HttpClientInterface;

class Api
{
    /** @var HttpClientInterface */
    protected $client;
    /** @var string */
    protected $accessToken;

    public function __construct(string $accessToken, ?HttpClientInterface $client)
    {
        $this->accessToken = $accessToken;
        if (!$client) {
            $client = new GuzzleHttpClient();
        }
        $this->client = $client;
    }

    public function getClient(): HttpClientInterface
    {
        return $this->client;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
