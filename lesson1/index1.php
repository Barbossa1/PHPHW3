<?php
$stack = new SplStack();

//$stack->push("Это тестовый вариант проверки (задачи со скобками). И вот еще скобки: {[][()]}");
//$stack->push("((a + b)/ c) - 2");
$stack->push("([ошибка)");
//$stack->push('\"(\")');

$a = 0;
foreach ($stack as $value) {
    for ($i = 0; $i < strlen($value); $i++) {
        if ($value[$i] == '(' || $value[$i] == '[' || $value[$i] == '{') {
            $a++;
        } elseif ($value[$i] == ')' || $value[$i] == ']' || $value[$i] == '}') {
            $a--;
        }
//        if (strstr($value, '(') || strstr($value, '[')) {
//            $a++;
//        } elseif (strstr($value, ')') || strstr($value, ']')) {
//            $a--;
//        }
    }

    if ($a !== 0) {
        echo 'Баланс скобок нарушен!';
    } else {
        echo 'Все ок!';
    }
}
echo $a;