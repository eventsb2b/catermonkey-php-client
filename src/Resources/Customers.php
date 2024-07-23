<?php

namespace EventsB2B\Catermonkey\Resources;

class Customers extends Resource
{
    /**
     * Create a customer
     */
    public function create(array $data): array
    {
        return $this->request('POST', 'customers', [
            'json' => $data,
        ]);
    }

    /**
     * Update a customer
     */
    public function update(array $data): array
    {
        return $this->request('PUT', 'customers', [
            'json' => $data,
        ]);
    }

    /**
     * Get a single customer
     */
    public function get(int $customerId): array
    {
        return $this->request('GET', 'customers/'.$customerId);
    }

    /**
     * Get a list of customers
     */
    public function search(?int $page = null, ?int $limit = null, ?string $type = null): array
    {
        return $this->request('GET', 'search/customers', [
            'query' => [
                'page' => $page,
                'limit' => $limit,
                'type' => $type,
            ],
        ]);
    }
}
