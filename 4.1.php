<?php

function makingRhombus ($value) {
    $makingTimes = (int)$value / 2;

    for ($i = 0; $i < $makingTimes; $i++) {

        for ($k = $makingTimes - 1; $k > $i; $k--) {
            echo "  ";
        }
        for ($j = 0; $j <= $i; $j++) {
            echo ' *';
        }
        for ($j = 1; $j <= $i; $j++) {
            echo ' *';
        }
        echo PHP_EOL;
    }
    for ($i = 1; $i <= $makingTimes; $i++) {

        for ($k = 0; $k < $i; $k++) {
            echo "  ";
        }
        for ($j = $makingTimes; $j >= $i; $j--) {
            echo ' *';
        }
        for ($j = $makingTimes -1; $j >= $i; $j--) {
            echo ' *';
        }
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

