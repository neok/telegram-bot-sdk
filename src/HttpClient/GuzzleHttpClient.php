<?php


namespace Neok\Telegram\HttpClient;


use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClientInterface
{

    protected $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

}