<?php

$bar = [1,2,3];

if (!($bar instanceof Foo)) {
    throw new TypeError('Expected ' . Foo::class . ', got ' . (is_object($bar) ? get_class($bar) : gettype($bar)));
}
