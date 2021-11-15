<?php

function toRna(string $input): string {
    return strtr($input, [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U',
    ]);
}