<?php

declare(strict_types=1);

enum Suit {
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function pickCard(Suit $suit) {
    echo 'OK' . PHP_EOL;
}

$val = Suit::Diamonds;

pickCard($val);
pickCard(Suit::Clubs);
pickCard('Spades');