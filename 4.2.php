<?php

function moreThenTwo($value)
{
    $timesDegreedTwo = $value * 2;
    for ($i = 0; $i < $value;) {
        $even = $timesDegreedTwo;
        $odd = $timesDegreedTwo;
        $even -= $i;
        $i++;
        $odd += $i;
        echo $i . ' ';

        for ($j = 0, $making = $value / 2; $j < $making; $j++) {
            if ($j + 1 < $making) {
                echo $even . ' ' . $odd . ' ';
                $even += $timesDegreedTwo;
                $odd += $timesDegreedTwo;
            } else if ($j + 1 == $making) {
                echo $odd;
            }
        }
        echo PHP_EOL;
    }
}

$times = (int)$argv[1];

switch ($times) {
    case $times === false:
        echo 'U have entered incorrect value, need to be from 1' .PHP_EOL;
        break;
    case $times < 0:
        echo 'the value need to be ....' . PHP_EOL;
        break;
    case $times === 1:
        echo '1' .PHP_EOL;
        break;
    case $times === 2:
        echo '1 4' . PHP_EOL . '2 3' . PHP_EOL;
        break;
    case $times > 2:
        moreThenTwo($times);

}





