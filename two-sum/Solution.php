<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($p = $i + 1; $p < count($nums); $p++) {
                if ($target == $nums[$i] + $nums[$p]) {
                    return [$i, $p];
                }
            }
        }
    }
}
