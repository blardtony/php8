<?php

declare(strict_types=1);

class Number
{
    public function __construct(private float|int $number)
    {
    }

    public function getNumber(): float|int
    {
        return $this->number;
    }

    public function setNumber(float|int $number): void
    {
        $this->number = $number;
    }
}
$number = new Number(10);
echo $number->getNumber() . PHP_EOL;
$number->setNumber(9.2);
echo $number->getNumber() . PHP_EOL;
echo "\n\n";
$number->setNumber("8");
echo $number->getNumber();
