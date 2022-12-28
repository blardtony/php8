<?php
declare(strict_types=1);

switch ('foo') {
    case 0:
        $result = 'Oh non!';
        break;
    case 'foo':
        $result = "C'est ce que j'attends";
        break;
}

echo $result;