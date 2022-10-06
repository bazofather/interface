<?php

namespace Bazofather\Interfaces\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpRequest
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function get($url, $params = [],  $headers = []): array
    {
        $response = $this->client->request(
            'GET',
            $url,
            [
                'headers' => $headers,
            ]
        );

        $statusCode = $response->getStatusCode();


        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'

        $result = $content;
        return $result->toArray();
    }

    public function post($url, $headers = []): array
    {
        $response = $this->client->request(
            'POST',
            $url,
            [
                'headers' => $headers,
            ]
        );

        $statusCode = $response->getStatusCode();
    }
}
