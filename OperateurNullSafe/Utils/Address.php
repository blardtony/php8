<?php

declare(strict_types=1);

class Address
{
    private string $country;

    public function __construct()
    {
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getCountry(): string
    {
        return $this->country;
    }
}