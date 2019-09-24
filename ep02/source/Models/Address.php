<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct("addresses",["user_id"],"addr_id", false);
    }

    public function add(User $user_id, string $street, string $number): Address
    {
        $this->user_id = $user_id;
        $this->street = $street;
        $this->number = $number;

        return $this;
    }
}