<?php

include "quickSort.php";
const COUNT = 100;
const MIN_RAND = 1;
const MAX_RAND = 1000;

function _randArray ($count = COUNT, $minRand = MIN_RAND, $maxRand = MAX_RAND)
{
    if ($count != COUNT && $count>$maxRand-$minRand)  {
        $minRand = 1;
        $maxRand = $count * 3;
    }
    $myArray = [];
    for ($i= 0; $i < $count; $i++) {
        do {
            $num = mt_rand($minRand, $maxRand);
        } while (in_array($num, $myArray)) ;
        $myArray[] = $num;
    }
    return $myArray;
}



function getSortRandArray($count = COUNT, $minRand = MIN_RAND, $maxRand = MAX_RAND)
{
//	$array = ;
    return quickSortLesson(_randArray($count, $minRand, $maxRand));
}