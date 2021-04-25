<?php

namespace Brain\Games\Functions;

function getRandomNumber(): int
{
    return random_int(1, 10);
}

function getRandomElement(array $elements)
{
    if (empty($elements)) {
        return null;
    }

    $index = random_int(0, count($elements) - 1);

    return $elements[$index];
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
