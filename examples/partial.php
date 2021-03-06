<?php

require __DIR__.'/../vendor/autoload.php';

use React\Partial;

$add = function ($a, $b) {
    return $a + $b;
};

$addOne = Partial\bind($add, 1);

echo sprintf("%s\n", $addOne(5));
// outputs 6
