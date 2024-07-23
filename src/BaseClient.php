<?php

namespace EventsB2B\Catermonkey;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

abstract class BaseClient
{
    const BASE_URL = 'https://app.catermonkey.com/api/';

    private string $apiKey;

    protected GuzzleClient $client;

    public function __construct(string $apiKey, array $config = [])
    {
        $this->apiKey = $apiKey;

        $this->client = new GuzzleClient(array_merge($config, [
            'base_uri' => self::BASE_URL,
            'headers' => [
                'Accept' => 'application/json',
                'X-Catermonkey-Key' => $this->apiKey,
            ],
        ]));
    }

    /**
     * Execute a request to the API
     *
     * @throws \Exception
     */
    public function request(string $method, string $uri, array $options = []): array
    {
        try {
            $response = $this->client->request($method, $uri, $options);

            return $this->decodeResponse($response);
        } catch (GuzzleException $e) {
            throw new \Exception('API request failed: '.$e->getMessage());
        }
    }

    /**
     * Decode the response from the API
     *
     * @return mixed
     */
    private function decodeResponse(ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}
