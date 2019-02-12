<?php

function makingRhombus($value) : void
{
    $counter = 0;

    while ($counter < $value ) {
        echo str_repeat(' ', $value - $counter);
        echo str_repeat(' *', ++$counter);
        echo PHP_EOL;
        $counter++;
    }

    $counter = 1;
    while ($value > $counter ) {
        $counter++;
        echo str_repeat(' ', ++$counter);
        $times = $value - $counter;
        echo str_repeat(' *', ++$times);
        echo PHP_EOL;
    }
}

$times = isset($argv[1]) ? (int) $argv[1]: null;

switch ($times) {
    case $times === false:
        echo 'U need to enter ODD value, after "3"' . PHP_EOL;
        break;
    case $times < 0:
        echo 'U need to enter a positiv numer' . PHP_EOL;
        break;
    case $times === 1:
        echo ' * ' . PHP_EOL;
        break;
    case $times % 2 === 0:
        echo 'Only ODD numbers' . PHP_EOL;
        break;
    default:
        makingRhombus($times);
}
