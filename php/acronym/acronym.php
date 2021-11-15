<?php

function acronym ($input): string {
    $words = preg_split('/[\s-]+/u', $input);

    if (count($words) === 1) {
        return '';
    }

    return implode('', array_map(static function ($word) {
        if (preg_match_all('/[A-Z]?[a-z]+/u', $word, $matches) > 1) {
            $result = '';

            foreach (current($matches) as $match) {
                $result .= mb_strtoupper(mb_substr($match, 0, 1));
            }

            return $result;
        }

        return mb_strtoupper(mb_substr($word, 0, 1));
    }, $words));
}