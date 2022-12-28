<?php
declare(strict_types=1);

$result = match ('foo') {
    0 => 'Oh non!',
    'foo' => "C'est ce que j'attends",
};

echo $result;