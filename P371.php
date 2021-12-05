<?php

class P371
{
    function getSum($a, $b)
    {
        if ($b == 0) return $a;

        $toNumber = abs($b);

        if ($b > 0) {
            for ($i = 1; $i <= $toNumber; $i++) {
                $a++;
            }
        }

        if ($b < 0) {
            for ($i = 1; $i <= $toNumber; $i++) {
                $a--;
            }
        }

        return $a;
    }
}

$obj = new P371();
var_dump($obj->getSum(-10, -7));
