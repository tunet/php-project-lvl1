<?php

namespace Brain\Games\Functions;

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

function isPrimeNumber(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if (isDivisible($number, $i)) {
            return false;
        }
    }

    return true;
}
