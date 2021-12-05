<?php


class P136
{
    function singleNumber($nums)
    {
        return array_search(1, array_count_values($nums));
    }
}

$obj = new P136();
print_r($obj->singleNumber([4, 1, 2, 1, 2]));
