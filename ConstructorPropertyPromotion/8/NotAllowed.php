<?php

declare(strict_types=1);

function user(private string $name) {}

abstract class UserNotAllowed {
    abstract public function __constructor(private string $name);
}

interface UserNotAllowedInterface {
    public function __constructor(private string $name);
}