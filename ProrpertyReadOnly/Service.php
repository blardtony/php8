<?php

declare(strict_types=1);
class Manager
{
    public function read()
    {
        echo "Manager\n";
    }
}
class Service
{

    public function __construct(private readonly Manager $manager)
    {
    }

    public function manage()
    {
        $this->manager->read();

        $this->manager = null;
    }
}

(new Service(new Manager()))->manage();