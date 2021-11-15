<?php

function isArmstrongNumber(int $number): bool {
    $numbers = str_split((string)$number);
    $power = count($numbers);

    return $number === array_reduce($numbers, static function ($carry, $item) use ($power) {
        $carry += $item ** $power;

        return $carry;
    });
}