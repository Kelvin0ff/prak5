<?php
function alphabeticalorder(string $str): string
{
    $chars = str_split($str);
    sort($chars);
    return implode('', $chars);
}
$input = 'alphabetical';
$result = alphabeticalorder($input);
echo $result;
