<?php
var_dump(array_is_list([])) . PHP_EOL; // true
var_dump(array_is_list([1, 2, 3])) . PHP_EOL; // true
var_dump(array_is_list(['cats', 2, 3])) . PHP_EOL; // true
var_dump(array_is_list(['cats', 'dogs'])) . PHP_EOL; // true
var_dump(array_is_list([0 => 'cats', 'dogs'])) . PHP_EOL; // true
var_dump(array_is_list([0 => 'cats', 1 => 'dogs'])) . PHP_EOL; // true

// false array_is_list() examples
var_dump(array_is_list([1 => 'cats', 'dogs'])) . PHP_EOL; // as first key isn't 0
var_dump(array_is_list([1 => 'cats', 0 => 'dogs'])) . PHP_EOL; // keys are out of order
var_dump(array_is_list([0 => 'cats', 'bark' => 'dogs'])) . PHP_EOL; // non-integer keys
var_dump(array_is_list([0 => 'cats', 2 => 'dogs'])) . PHP_EOL; // gap in between keys