<?php

namespace Brain\Games\Games\BrainPrime;

function getGameRoundData(): array
{
    $randomNumber = random_int(2, 100);
    $question = (string) $randomNumber;
    $correctAnswer = isPrimeNumber($randomNumber) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function getGameDescription(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
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
