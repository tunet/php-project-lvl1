<?php

namespace Brain\Games\BrainEven;

use function Brain\Games\Functions\isEven;

function gameStep(): array
{
    $randomNumber = random_int(1, 100);
    $question = (string)$randomNumber;
    $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}
