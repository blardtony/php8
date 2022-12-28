<?php

declare(strict_types=1);

class UserInheritance
{
    public function __construct(
        private string $name,
        private string $email,
        private string $password
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}

class Customer extends UserInheritance
{

    public function __construct(
        string $name,
        string $email,
        string $password,
        private int $creditRating
    ) {
        parent::__construct($name, $email, $password);
    }

    public function getCreditRating(): int
    {
        return $this->creditRating;
    }
}

$user = new Customer("Tony", "tony.blard@orange.com", "Password123", 5);
echo $user->getName(), " ", $user->getEmail(), " ", $user->getPassword(), " ", $user->getCreditRating();