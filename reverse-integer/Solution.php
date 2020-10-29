<?php


class Solution
{
    function reverse($x) {
        $a = 1;

        if($x<0) {$a = -1;}


        $temp = strrev($x);
        $temp = intval($temp) * $a;

        if($temp>= pow(2,31)-1)
        {
            return 0;
        }
        if($temp<= pow(2,31)*-1)
        {
            return 0;
        }
        return $temp;
    }
}