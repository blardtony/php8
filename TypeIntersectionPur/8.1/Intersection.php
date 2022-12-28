<?php

class A {
    private Traversable&Countable $countableIterator;

    public function getCountableIterator(): Countable&Traversable
    {
        return $this->countableIterator;
    }

    public function setCountableIterator(Countable&Traversable $countableIterator): void
    {
        $this->countableIterator = $countableIterator;
    }
}