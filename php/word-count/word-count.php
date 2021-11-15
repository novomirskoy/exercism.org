<?php
declare(strict_types=1);

function wordCount(string $input): array {
    $words = preg_split('/[\W]+/', $input);
    $words = array_filter($words, static function (string $word): bool {
        return $word !== '';
    });
    $words = array_map('strtolower', $words);

    $counter = [];

    foreach ($words as $word) {
        if (array_key_exists($word, $counter)) {
            $counter[$word]++;
        } else {
            $counter[$word] = 1;
        }
    }

    return $counter;
}