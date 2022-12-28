<?php

declare(strict_types=1);

$array = array_fill(0, 100, 50);

$string = "string";
$html = htmlspecialchars($string, ENT_COMPAT|ENT_HTML401, 'UTF-8', false);

