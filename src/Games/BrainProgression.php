<?php

namespace Brain\Games\Games\BrainProgression;

function getGameRoundData(): array
{
    $length = 10;
    $startNumber = random_int(1, 100);
    $step = random_int(1, 10);
    $progression = range($startNumber, ($length - 1) * $step + $startNumber, $step);
    $hiddenIndex = array_rand($progression);
    $correctAnswer = (string) $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';
    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}

function getGameDescription(): string
{
    return 'What number is missing in the progression?';
}
