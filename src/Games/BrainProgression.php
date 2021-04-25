<?php

namespace Brain\Games\BrainProgression;

function gameStep(): array
{
    $length = 10;
    $startNumber = random_int(1, 100);
    $step = random_int(1, 10);
    $progression = range($startNumber, ($length - 1) * $step + $startNumber, $step);
    $hiddenIndex = random_int(1, $length) - 1;
    $correctAnswer = (string)$progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';
    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}
