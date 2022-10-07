<?php

namespace Bazofather\Interface\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Config\FrameworkConfig;


class HttpRequest
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->client = $client->withOptions([
            'headers' => [
                'Accept' => 'application/json',
            ]
        ]);
    }

    // public function defaultConfig($config = []) 
    // {
    //     $this->client = $this->client->withOptions([
    //         'headers' => [
    //             'Accept' => 'application/json',
    //         ]
    //     ]);

    // }

    // return static function (FrameworkConfig $framework) {
    //     $framework->httpClient()
    //         ->defaultOptions()
    //             ->header('User-Agent', 'My Fancy App')
    //     ;
    // };

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
        $contentType = $response->getHeaders()['content-type'][0];

        $content = $response->getContent();

        $result = [
            'result' =>  $response->toArray(),
            'content_type' => $contentType,
            'status_code'  => $statusCode,
        ];

        return $result;
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

    public function withBearerAuth($token)
    {
        //
    }

    public function upload()
    {
        //
    }
}
