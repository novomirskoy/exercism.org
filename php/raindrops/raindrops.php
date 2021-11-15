<?php

function raindrops(int $input): string {
    $result = '';

    if ($input % 3 === 0) {
        $result .= 'Pling';
    }

    if ($input % 5 === 0) {
        $result .= 'Plang';
    }

    if ($input % 7 === 0) {
        $result .= 'Plong';
    }

    if ($input % 3 !== 0 && $input % 5 !== 0 && $input % 7 !== 0) {
        $result = (string) $input;
    }

    return $result;
}