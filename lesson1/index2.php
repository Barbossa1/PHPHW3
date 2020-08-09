<?php
//$stack = new SplStack();
//$heap = new SplMaxHeap();
//
//$a = 600851475143;
//
//for ($i = 1; $i < $a; $i++) {
//    if (is_int($a / $i)) {
//        $stack->push($i);
//    }
//}
//
//$heap->insert($stack);
//$heap->extract();

$input = 600851475143;
$primeFac = getFac($input);
rsort($primeFac);
echo reset($primeFac);
function getFac($input) {
    $i = 2;
    $primeFac = array();
    for ($i = 2; $i * $i <= $input; $i++) {
        if (fmod($input, $i) == 0) {
            $primeFac[] = $i;
            $input = $input / $i;
        }
    }
    if ($input != 1) {
        $primeFac[] = $input;
    }
    return $primeFac;
}

//6857