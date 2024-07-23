<?php

namespace EventsB2B\Catermonkey\Resources;

class Locations extends Resource
{
    /**
     * Create a location
     */
    public function create(array $data): array
    {
        return $this->request('POST', 'locations', [
            'json' => $data,
        ]);
    }

    /**
     * Update a location
     */
    public function update(array $data): array
    {
        return $this->request('PUT', 'locations', [
            'json' => $data,
        ]);
    }

    /**
     * Get a single location
     */
    public function get(int $locationId): array
    {
        return $this->request('GET', 'locations/'.$locationId);
    }

    /**
     * Get a list of locations
     */
    public function search(?int $page = null, ?int $limit = null, ?string $type = null): array
    {
        return $this->request('GET', 'search/locations', [
            'query' => [
                'page' => $page,
                'limit' => $limit,
                'type' => $type,
            ],
        ]);
    }
}
