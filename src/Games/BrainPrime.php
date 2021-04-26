<?php

namespace Brain\Games\Games\BrainPrime;

function gameStep(): array
{
    $randomNumber = random_int(2, 100);
    $question = (string)$randomNumber;
    $correctAnswer = isPrimeNumber($randomNumber) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function isPrimeNumber(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
