<?php

namespace Brain\Games\BrainGcd;

use function Brain\Games\Functions\getRandomNumber;
use function Brain\Games\Functions\isDivisible;

function gameStep(): array
{
    $number1 = getRandomNumber(100);
    $number2 = getRandomNumber(100);
    $question = sprintf('%d %d', $number1, $number2);
    $correctAnswer = 1;

    if ($number1 > $number2) {
        [$number2, $number1] = [$number1, $number2];
    }

    for ($i = 2; $i <= $number1; $i++) {
        if (isDivisible($number1, $i) && isDivisible($number2, $i)) {
            $correctAnswer = $i;
        }
    }

    return [$question, (string)$correctAnswer];
}
