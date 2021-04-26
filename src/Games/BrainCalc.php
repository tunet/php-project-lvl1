<?php

namespace Brain\Games\Games\BrainCalc;

function gameStep(): array
{
    $number1 = random_int(1, 10);
    $number2 = random_int(1, 10);
    $operator = getRandomOperator(['+', '-', '*']);
    $question = sprintf('%d %s %d', $number1, $operator, $number2);

    $correctAnswer = calculate($number1, $number2, $operator);

    return [$question, (string)$correctAnswer];
}

function calculate(int $number1, int $number2, string $operator): int
{
    switch ($operator) {
        case '+':
            $correctAnswer = $number1 + $number2;
            break;
        case '-':
            $correctAnswer = $number1 - $number2;
            break;
        case '*':
            $correctAnswer = $number1 * $number2;
            break;
        default:
            throw new \LogicException(sprintf('Operator "%s" not supported.', $operator));
    }

    return $correctAnswer;
}

function getRandomOperator(array $operators): string
{
    $index = array_rand($operators);

    if (null === $index) {
        throw new \RuntimeException('Не могу выбрать случайный оператор.');
    }

    return $operators[$index];
}
