<?php

namespace EventsB2B\Catermonkey\Resources;

use EventsB2B\Catermonkey\Client;

abstract class Resource
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function request(string $method, string $uri, array $options = []): array
    {
        return $this->client->request($method, $uri, $options);
    }
}
