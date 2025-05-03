<?php

namespace App\Algorithms\Array\PrefixSum;
//[1, 2, 3, 4, 5, 6, 7, 8, 9]
// [1,3,6,10,15,21,28,36,45]
// index = 3 - 6
class RangeSumQuery
{
    public static function run(array $array, int $start, int $end): int {
        $n = count($array);
        $prefixSum = [];
        $prefixSum[0] = $array[0];
        for ($i = 1; $i < $n; $i++) {
            $prefixSum[$i] = $prefixSum[$i-1]+$array[$i];
        }

        return $prefixSum[$end] - $prefixSum[$start - 1];
    }
}