<?php

namespace Brain\Games\BrainCalc;

use function Brain\Games\Functions\getRandomElement;

function gameStep(): array
{
    $number1 = random_int(1, 10);
    $number2 = random_int(1, 10);
    $operator = getRandomElement(['+', '-', '*']);
    $question = sprintf('%d %s %d', $number1, $operator, $number2);

    switch ($operator) {
        case '+':
            $correctAnswer = $number1 + $number2;
            break;
        case '-':
            $correctAnswer = $number1 - $number2;
            break;
        default:
            $correctAnswer = $number1 * $number2;
            break;
    }

    return [$question, (string)$correctAnswer];
}
