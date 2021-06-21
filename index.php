<?php
function totalMoney($arr)
{
    $total = 0;
    for ($i = 0; $i < count($arr[0]); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$j][$i] != 0) {
                $total = $total + $arr[$j][$i];
            } else {
                break;
            }
        }
    }
    return $total;
}

$array = [
    [2, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
];
echo totalMoney($array);