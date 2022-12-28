<?php

declare(strict_types=1);

$callable = fn() => throw new Exception();
$callable();

$value = $nullableValue ?? throw new InvalidArgumentException();

$falsableValue = false;
$value = $falsableValue ?: throw new InvalidArgumentException();

$value = !empty($array)
    ? reset($array)
    : throw new InvalidArgumentException();