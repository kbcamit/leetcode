<?php

class P1695
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumUniqueSubarray($nums) {
        $uniqueArr = array_unique($nums);
        echo "<pre>";
        print_r($uniqueArr);
        return array_sum($uniqueArr);
    }
}

$obj = new P1695();
print_r($obj->maximumUniqueSubarray([187,470,25,436,538,809,441,167,477,110,275,133,666,345,411,459,490,266,987,965,429,166,809,340,467,318,125,165,809,610,31,585,970,306,42,189,169,743,78,810,70,382,367,490,787,670,476,278,775,673,299,19,893,817,971,458,409,886,434]));

?>