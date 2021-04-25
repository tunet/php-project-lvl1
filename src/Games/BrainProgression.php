<?php

namespace Brain\Games\BrainProgression;

use function Brain\Games\Functions\getRandomNumber;

function gameStep(): array
{
    $length = 10;
    $startNumber = getRandomNumber(100);
    $step = getRandomNumber(10);
    $progression = range($startNumber, ($length - 1) * $step + $startNumber, $step);
    $hiddenIndex = getRandomNumber($length) - 1;
    $correctAnswer = (string)$progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';
    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}
