<?php

class Solution
{
    function addBinary($a, $b)
    {
        $lenA = strlen($a) - 1;//1 :0 , 1
        $lenB = strlen($b) - 1;// 0
        $flag = 0;
        $result = "";
        while ($lenA >= 0 || $lenB >= 0) {
            $s1 = 0;
            $s2 = 0;
            if ($lenA >= 0) $s1 = intval($a[$lenA--]);//  1 , 0
            if ($lenB >= 0) $s2 = intval($b[$lenB--]);// 0, -1

            $sum = $s1 + $s2 + $flag;//1+0
            if ($sum >= 2) {
                $result .= $sum - 2;// 0
                $flag = 1;
            } else {
                $result .= $sum;// 1
                $flag = 0;
            }
        }
        if ($flag == 1) return strrev($result . '1');//001 // 100
        return strrev($result);
    }


}