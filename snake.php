<?php

function setDirection(int $value, string $direction)
{

    if ($direction === 'right') {
        return rightPrint($value);
    }
    return botPrint($value);

}

function rightPrint(int $size): void
{
    $lastValue = $size ** 2;
    for ($i = 0, $value = 0; $i < $size; $i += 2) {
        for ($h = 0; $h < $size; $h++) {
            printf("%4d", ++$value);
        }
        echo PHP_EOL;
        $value += $size;

        if ($value <= $lastValue) {
            for ($j = 0; $j < $size; $j++) {
                printf("%4d", $value--);
            }
            echo PHP_EOL;
            $value += $size;
        }
    }
}

function botPrint(int $size): void
{
    $doubleLenght = $size * 2;
    for ($i = 0; $i < $size;) {
        $getingDown = $doubleLenght - $i;
        $i++;
        $getingUp = $doubleLenght + $i;

        printf('%4d', $i);

        for ($j = 1; $j < $size; $j++) {
            printf('%4d', $getingDown);
            $getingDown += $doubleLenght;
            $j++;
            if ($j < $size) {
                printf('%4d', $getingUp);
                $getingUp += $doubleLenght;
            }
        }
        echo PHP_EOL;
    }
}
12
$sideLenght = $argv[1] ?? null;
$direction = $argv[2] ?? null;

if (is_numeric($sideLenght) && $direction == ('bot' || 'right')) {
    return setDirection($sideLenght, $direction);
}
echo 'U need to enter numeric <side_lenght> and <direction (bot|right)> ' . PHP_EOL;