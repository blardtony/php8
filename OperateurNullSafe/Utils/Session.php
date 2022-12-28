<?php

declare(strict_types=1);

class Session
{
    private UserOp $user;

    public function getUser(): UserOp
    {
        return $this->user;
    }

    public function setUser(UserOp $user): void
    {
        $this->user = $user;
    }
}