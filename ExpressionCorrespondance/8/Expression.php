<?php

declare(strict_types=1);

$result = match (1) {
    0 => 'Foo',
    1 => 'Bar',
    3 => 'Baz',
};

echo $result;
