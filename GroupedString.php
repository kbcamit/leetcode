<?php

class GroupedString
{
    public function checkGroupedStr($str)
    {
        $seenLetters = array();
        $lastLetter = "";
        for ($i = 0; $i < strlen($str); $i++) {
            if($lastLetter == $str[$i]) continue;
            if($lastLetter != $str[$i] && in_array($str[$i], $seenLetters)) {
                return false;
            }
            array_push($seenLetters, $str[$i]);
            $lastLetter = $str[$i];
        }
        echo "<pre>";
        print_r($seenLetters);
        return true;
    }
}

$groupedStr = new GroupedString();
print_r($groupedStr->checkGroupedStr("AAABBBBBCCC"));