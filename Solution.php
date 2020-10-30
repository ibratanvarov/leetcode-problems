<?php


class Solution
{
    function convertToTitle($n) {

        $arr= array('A','B','C','D','E','F','G','H','I','J','K','L','M','N',
            'O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $sum="";

        while($n){
            $n = $n - 1;
            $sum = $arr[$n % 26] . $sum;
            $n = intdiv($n, 26);
        }

        return $sum;
    }

}