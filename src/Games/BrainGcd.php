<?php

namespace Brain\Games\Games\BrainGcd;

function gameStep(): array
{
    $number1 = random_int(1, 100);
    $number2 = random_int(1, 100);
    $question = sprintf('%d %d', $number1, $number2);

    $correctAnswer = calculateGcd($number1, $number2);

    return [$question, (string)$correctAnswer];
}

function isDivisible(int $number, int $divisor): bool
{
    return $number % $divisor === 0;
}

function calculateGcd(int $number1, int $number2): int
{
    $correctAnswer = 1;

    if ($number1 > $number2) {
        [$number2, $number1] = [$number1, $number2];
    }

    for ($i = 2; $i <= $number1; $i++) {
        if (isDivisible($number1, $i) && isDivisible($number2, $i)) {
            $correctAnswer = $i;
        }
    }

    return $correctAnswer;
}
