<?php

namespace App\Algorithms\Array\TwoPointers;

class FindPairWithGivenSum
{
    public static function run(array $array, int $target) {
        $n = count($array);
        $leftIndex = 0;
        $rightIndex = $n - 1;
        while ($leftIndex < $rightIndex) {
            $sum = $array[$leftIndex] + $array[$rightIndex];
            if($sum == $target) {
                return true;
            }elseif($sum > $target) {
                $rightIndex--;
            } else {
                $leftIndex++;
            }
        }

        return false;
    }
}