<?php

namespace EventsB2B\Catermonkey\Resources;

class Brands extends Resource
{
    /**
     * List all brands
     */
    public function list(): array
    {
        return $this->request('GET', 'brands');
    }

    /**
     * Get a single brand
     */
    public function get(int $brandId): array
    {
        return $this->request('GET', 'brands/'.$brandId);
    }
}
