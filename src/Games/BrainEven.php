<?php

namespace Brain\Games\Games\BrainEven;

function getGameRoundData(): array
{
    $randomNumber = random_int(1, 100);
    $question = (string) $randomNumber;
    $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function getGameDescription(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
