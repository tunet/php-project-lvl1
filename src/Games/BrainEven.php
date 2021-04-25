<?php

namespace Brain\Games\BrainEven;

use function Brain\Games\Functions\getRandomNumber;
use function Brain\Games\Functions\isEven;

function gameStep(): array
{
    $randomNumber = getRandomNumber();
    $question = (string)$randomNumber;
    $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}
