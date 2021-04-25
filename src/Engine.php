<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function run(callable $game, string $description): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);

    $countQuestions = 3;
    $correctAnswers = 0; // @todo: remove this variable

    for ($i = 0; $i < $countQuestions; $i++) {
        [$question, $correctAnswer] = $game();
        $answer = prompt(sprintf('Question: %s', $question));

        line("Your answer: %s", $answer);
        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            break;
        }
        line('Correct!');
        $correctAnswers++;
    }

    $message = $countQuestions === $correctAnswers ? "Congratulations, %s!" : "Let's try again, %s!";
    line($message, $name);
}
