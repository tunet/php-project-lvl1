<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;

function run(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $options = ['yes' => 1, 'no' => 0];
    $flipOptions = array_flip($options);
    $countQuestions = 3;
    $correctAnswers = 0;

    for ($i = 0; $i < $countQuestions; $i++) {
        $number = getRandomNumber();
        $isEven = isEven($number);
        $answer = prompt(sprintf('Question: %d', $number));
        line("Your answer: %s", $answer);
        if (!isset($options[$answer]) || (bool)$options[$answer] !== $isEven) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $flipOptions[(int)$isEven]);
            break;
        }
        line('Correct!');
        $correctAnswers++;
    }

    $message = $countQuestions === $correctAnswers ? "Congratulations, %s!" : "Let's try again, %s!";
    line($message, $name);
}

function getRandomNumber(): int
{
    return random_int(1, 100);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
