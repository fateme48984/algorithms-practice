<?php
namespace App\Algorithms\Array\SlidingWindow;

class MaximumSumSubarrayOfSizeK
{
    public static function run(array $array, int $maxSize): mixed
    {
        $n = count($array);
        if($maxSize > $n) {
            return false;
        }
        
        $currentSum = 0;
        for ($i = 0; $i < $maxSize; $i++) {
            $currentSum += $array[$i];
        }
        $maxSum = $currentSum;
        $start = 0;
        for ($end = $maxSize; $end < $n ; $end++) {
            $currentSum = $currentSum - $array[$start] + $array[$end];
            if ($currentSum > $maxSum) {
                $maxSum = $currentSum;
                $start++;
            }
        }
        
        return $maxSum;
    }
}