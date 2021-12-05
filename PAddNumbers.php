<?php


// Definition for a singly-linked list.
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}



class PAddNumbers
{
    private $numberArr = [];

    function getNumberArr($num)
    {
        $this->numberArr[] = $num->val;
        if ($num->next) {
            $this->getNumberArr($num->next);
        }
        return $this->numberArr;
    }

    function findSum($str1, $str2)
    {
        if (strlen($str1) > strlen($str2)) {
            $temp = $str1;
            $str1 = $str2;
            $str2 = $temp;
        }
        // Take an empty string for storing result
        $str3 = "";

        // Calculate length of both string
        $n1 = strlen($str1);
        $n2 = strlen($str2);
        $diff = $n2 - $n1;

        // Initially take carry zero
        $carry = 0;

        // Traverse from end of both strings
        for ($i = $n1 - 1; $i >= 0; $i--) {
            // Do school mathematics, compute sum 
            // of current digits and carry
            $sum = ((ord($str1[$i]) - ord('0')) +
                ((ord($str2[$i + $diff]) -
                    ord('0'))) + $carry);

            $str3 .= chr($sum % 10 + ord('0'));


            $carry = (int)($sum / 10);
        }

        // Add remaining digits of str2[]
        for ($i = $n2 - $n1 - 1; $i >= 0; $i--) {
            $sum = ((ord($str2[$i]) - ord('0')) + $carry);
            $str3 .= chr($sum % 10 + ord('0'));
            $carry = (int)($sum / 10);
        }

        // Add remaining carry
        if ($carry)
            $str3 .= chr($carry + ord('0'));

        // reverse resultant string
        return strrev($str3);
    }

    function getResult($l1, $l2)
    {
        $firstNumber = implode(array_reverse($l1));
        $secondNumber = implode(array_reverse($l2));

        $sum = $this->findSum($firstNumber, $secondNumber);

        $result = [];

        for ($i = 0; $i < strlen($sum); $i++) {
            array_push($result, $sum[$i]);
        }

        return array_reverse($result);
    }

    function getNode($arr)
    {
        $lastNode = null;
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            $newNode = new ListNode();
            $newNode->val = $arr[$i];
            if ($i == (count($arr) - 1)) {
                $newNode->next = null;
            } else {
                $newNode->next = $lastNode;
            }
            $lastNode = $newNode;
        }
        return $lastNode;
    }

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $firstNumberArr = $this->getNumberArr($l1);
        $this->numberArr = [];
        $secondNumberArr = $this->getNumberArr($l2);
        $result = $this->getResult($firstNumberArr, $secondNumberArr);
        $node = $this->getNode($result);
        return $node;
    }
}

$obj = new PAddNumbers();
print_r($obj->addTwoNumbers([2, 4, 3], [5, 6, 4]));
