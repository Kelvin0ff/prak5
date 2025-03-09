<?php
function isperfectnumber(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    $sum = 1;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $sum += $i;
            if ($i != $number / $i) {
                $sum += $number / $i;
            }
        }
    }
    return $sum == $number;
}

function findperfectnumber(array $array): ?int
{
    foreach ($array as $number) {
        if (isperfectnumber($number)) {
            return $number;
        }
    }
    return null;
}

$array = [6, 12, 28, 496, 8128, 33550336, 123, 456];
$perfectnumber = findperfectnumber($array);
if ($perfectnumber !== null) {
    echo "Найдено идеальное число: " . $perfectnumber;
} else {
    echo "Идеальное число не найдено.";
}
