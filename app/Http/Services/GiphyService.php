<?php

namespace App\Http\Services;

use App\Http\Clients\GiphyClient;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GiphyService
{
    protected Client $http;
    protected array $headers;
    protected string $api_key;

    public function __construct(GiphyClient $client)
    {
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
        $api_endpoint = 'random?limit=1&api_key=' . $this->api_key;

        $request = $this->http->get($api_endpoint, [
            'headers' => $this->headers,
            'timeout' => 30,
            'connect_timeout' => true,
            'http_errors' => true,
        ]);

        $response = (object)json_decode($request->getBody(), false, 512, JSON_THROW_ON_ERROR);
        $status = $response->meta->status;

        if ($response && $status === 200 && $response->data) {
            return $response->data->images->original->url;
        }
            return null;
    }

    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function getBySearch(string $q, $offset = 1): array|null
    {
        $api_endpoint = 'search?offset=' . $offset . '&limit=1&api_key=' . $this->api_key . '&q=' . $q;

        $request = $this->http->get($api_endpoint, [
            'headers' => $this->headers,
            'timeout' => 30,
            'connect_timeout' => true,
            'http_errors' => true,
        ]);

        $response = (object)json_decode($request->getBody()->getContents(), false, 512, JSON_THROW_ON_ERROR);
        $status = $response->meta->status;

        if ($response && $status === 200 && isset($response->data[0])) {
            return [$response->data[0]->images->original->url, $response->pagination->total_count];
        }
        return null;
    }
}
