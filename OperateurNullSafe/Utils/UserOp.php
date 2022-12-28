<?php

declare(strict_types=1);

class UserOp
{
    private Address $address;

    public function __construct()
    {
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    
    public function getAddress(): Address
    {
        return $this->address;
    }
    
}