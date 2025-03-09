<?php
function mostrecent(string $text): string
{
    preg_match_all('/\b\p{L}+\b/u', strtolower($text), $matches);
    $words = $matches[0];
    $wordcounts = array_count_values($words);
    return array_search(max($wordcounts), $wordcounts);
}
$text = "Это тестовый текст. Текст содержит несколько слов, но самое частое слово в тексте - это слово 'текст'.";
echo mostrecent($text);
