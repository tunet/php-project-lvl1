<?php

namespace Brain\Games\BrainPrime;

use function Brain\Games\Functions\isPrimeNumber;

function gameStep(): array
{
    $randomNumber = random_int(2, 100);
    $question = (string)$randomNumber;
    $correctAnswer = isPrimeNumber($randomNumber) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}
