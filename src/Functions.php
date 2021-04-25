<?php

namespace Brain\Games\Functions;

function getRandomNumber(int $max): int
{
    return random_int(1, $max);
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

function isDivisible(int $number, int $divisor): bool
{
    return $number % $divisor === 0;
}
