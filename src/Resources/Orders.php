<?php

namespace EventsB2B\Catermonkey\Resources;

class Orders extends Resource
{
    /**
     * Create an order
     */
    public function create(array $data): array
    {
        return $this->request('POST', 'orders', [
            'json' => $data,
        ]);
    }

    /**
     * Update an order
     */
    public function update(array $data): array
    {
        return $this->request('PUT', 'orders', [
            'json' => $data,
        ]);
    }

    /**
     * Return a PDF of the order
     *
     * @return string
     */
    public function pdf(): array
    {
        return $this->request('GET', 'orders/order-overview');
    }

    /**
     * Get a single order
     *
     * @return string
     */
    public function get(int $orderId): array
    {
        return $this->request('GET', 'orders/'.$orderId);
    }

    /**
     * Get a list of orders
     *
     * @return string
     */
    public function search(?int $page = null, ?int $limit = null, ?string $type = null): array
    {
        return $this->request('GET', 'search/orders', [
            'query' => [
                'page' => $page,
                'limit' => $limit,
                'type' => $type,
            ],
        ]);
    }
}
