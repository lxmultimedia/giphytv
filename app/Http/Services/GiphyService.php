<?php

namespace App\Http\Services;

use App\Http\Clients\GiphyClient;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GiphyService
{

    protected string $baseUrl;
    protected Client $http;
    protected array $headers;
    protected string $api_key;

    public function __construct(GiphyClient $client)
    {
        //$this->baseUrl = 'https://api.giphy.com/v1/gifs/';
        $this->baseUrl = '';
        $this->api_key = config('app.api_key');
        $this->http = $client;
        $this->headers = [
            'cache-control' => 'no-cache',
            'content-type' => 'application/x-www-form-urlencoded',
        ];
    }

    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function getRandom(string $uri = null): string|null
    {
        $full_path = $this->baseUrl;
        $full_path .= 'random?limit=1&api_key=' . $this->api_key;

        $request = $this->http->get($full_path, [
            'headers' => $this->headers,
            'timeout' => 30,
            'connect_timeout' => true,
            'http_errors' => true,
        ]);

        $response = (object)json_decode($request->getBody(), false, 512, JSON_THROW_ON_ERROR);
        $status = $response->meta->status;

        if ($response && $status === 200) {
            return $response->data->images->original->url;
        }
            return null;
    }

    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function getBySearch(string $q, $offset): array|null
    {
        $full_path = $this->baseUrl;
        $full_path .= 'search?offset=' . $offset . '&limit=1&api_key=' . $this->api_key . '&q=' . $q;

        $request = $this->http->get($full_path, [
            'headers' => $this->headers,
            'timeout' => 30,
            'connect_timeout' => true,
            'http_errors' => true,
        ]);

        $response = (object)json_decode($request->getBody(), false, 512, JSON_THROW_ON_ERROR);
        $status = $response->meta->status;

        if ($response && $status === 200 && isset($response->data[0])) {
            return [$response->data[0]->images->original->url, $response->pagination->total_count];
        }
        return null;
    }
}
