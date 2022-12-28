<?php

declare(strict_types=1);

class Number
{
    /**
     * @var int|float $number
     */
    private $number;

    /**
     * @param int|float $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * @return float|int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int|float $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }
}

$number = new Number(10);
echo $number->getNumber() . PHP_EOL;
$number->setNumber(9.2);
echo $number->getNumber() . PHP_EOL;
$number->setNumber("8");
echo $number->getNumber();