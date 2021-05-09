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

    $questionsCount = 3;

    for ($i = 0; $i < $questionsCount; $i++) {
        [$question, $correctAnswer] = $game();
        $answer = prompt(sprintf('Question: %s', $question));

        line("Your answer: %s", $answer);
        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);

            return;
        }
        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}
