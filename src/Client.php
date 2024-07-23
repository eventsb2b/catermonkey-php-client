<?php

namespace EventsB2B\Catermonkey;

use EventsB2B\Catermonkey\Resources\Brands;
use EventsB2B\Catermonkey\Resources\Customers;
use EventsB2B\Catermonkey\Resources\Locations;
use EventsB2B\Catermonkey\Resources\Orders;

class Client extends BaseClient
{
    /**
     * Returns an instance of the Brands resource
     */
    public function brands(): Brands
    {
        return new Brands($this);
    }

    /**
     * Returns an instance of the Customers resource
     */
    public function customers(): Customers
    {
        return new Customers($this);
    }

    /**
     * Returns an instance of the Locations resource
     */
    public function locations(): Locations
    {
        return new Locations($this);
    }

    /**
     * Returns an instance of the Orders resource
     */
    public function orders(): Orders
    {
        return new Orders($this);
    }
}
