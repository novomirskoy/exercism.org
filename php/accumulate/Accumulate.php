<?php

function accumulate(array $input, callable $accumulator): array
{
    return array_map($accumulator, $input);
}
