<?php

declare(strict_types=1);

$object = new StdClass;
var_dump($object::class);

$object = null;
var_dump($object::class);