<?php


class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */

    function isValid($s) {
        $characters = [];
        for($i = 0; $i < strlen($s); $i++){
            if($s[$i] == '(' || $s[$i] == '{' || $s[$i] == '[') {
                $characters[] = $s[$i];
                continue;
            }

            if(empty($characters)) return false;

            switch($s[$i]) {
                case ')': $x = $characters[count($characters) - 1];
                    array_pop($characters);
                    if($x == '[' || $x == '{') return false;
                    break;
                case '}': $x = $characters[count($characters) - 1];
                    array_pop($characters);
                    if($x == '(' || $x == '[') return false;
                    break;
                case ']': $x = $characters[count($characters) - 1];
                    array_pop($characters);
                    if($x == '(' || $x == '{') return false;
                    break;
            }
        }
        return empty($characters);
    }
}