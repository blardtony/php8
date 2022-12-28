<?php

$bar = [1,2,3];

if (!($bar instanceof Foo)) {
    throw new TypeError('Expected ' . Foo::class . ', got ' . get_debug_type($bar));
}
