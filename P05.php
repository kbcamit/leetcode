<?php

class Solution
{
    private $totalSeen = [];

    function checkNextCharacter($index, $str, $revStr, $revIndex)
    {
        if (isset($str[$index]) && isset($revStr[$revIndex])) {
            if ($str[$index] == $revStr[$revIndex]) {
                $nextIndex = $index + 1;
                $nextRevIndex = $revIndex + 1;
                echo "<pre>";
                print_r($index . ' -> ' . $revIndex);
                echo "</pre>";
                array_push($this->totalSeen, $revStr[$revIndex]);
                $this->checkNextCharacter($nextIndex, $str, $revStr, $nextRevIndex);
            }
//            else {
//                $nextIndex = $index + 1;
//                $this->checkNextCharacter($nextIndex, $str, $revStr, $revIndex);
//            }
        }
//        echo "<pre>";
//        print_r($this->totalSeen);
//        echo "</pre>";
        return $this->totalSeen;
    }

    function checkStrLoop($firstStr, $secondStr)
    {
        $result = [];
        for ($i = 0; $i < strlen($firstStr); $i++) {
            for ($j = 0; $j < strlen($secondStr); $j++) {
                if ($secondStr[$j] == $firstStr[$i]) {
                    $checkPalindromeResult = $this->checkNextCharacter($j, $secondStr, $firstStr, $i);
                    if (count($checkPalindromeResult) > count($result)) {
                        $result = $checkPalindromeResult;
                    } else {
                        if (count($checkPalindromeResult) == count($result)) {
                            $result = $checkPalindromeResult;
                        }
                    }
                    break;
                }
            }
            $this->totalSeen = [];
        }
        return $result;
    }

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        if (strlen($s) == 1) return $s;
        $reverseString = strrev($s);
        print_r($reverseString);
        $result = $this->checkStrLoop($s, $reverseString);
//        echo "result " . "<br>";
//        echo "<pre>";
//        print_r($result);
//        echo "</pre>";
        if (count($result) == 0) {
            return "";
        }
        if (count($result) == 1) {
            return implode("", $result);
        }
        $resultantStr = implode("", $result);
        $reverseResultantStr = strrev($resultantStr);
        if ($resultantStr == $reverseResultantStr) {
            return $resultantStr;
        } else {
            $result = $this->checkStrLoop($resultantStr, $reverseResultantStr);
            return implode("", $result);
        }
    }
}

$solution = new Solution();
//print_r($solution->longestPalindrome("babad"));
//$solution->longestPalindrome("cbbd");
//print_r($solution->longestPalindrome("abbcccbbbcaaccbababcbcabca"));
//print_r($solution->longestPalindrome("aacabdkacaa"));
//print_r($solution->longestPalindrome("babadada"));
print_r($solution->longestPalindrome("abbcccbbbcaaccbababcbcabca"));
