<?php

declare(strict_types=1);

class C1 {
    public function method($a): array
    {
        return [];
    }
}

class C2 extends C1 {
    public function method($a): int
    {
        return 1;
    }
}