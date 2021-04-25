<?php

namespace Brain\Games\BrainEven;

function gameStep(): array
{
    $randomNumber = getRandomNumber();
    $question = (string)$randomNumber;
    $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function getRandomNumber(): int
{
    return random_int(1, 100);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
