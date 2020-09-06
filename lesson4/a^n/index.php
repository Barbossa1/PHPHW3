<?php

func2();

function func2() {
    $a = mt_rand(1,9);
    $n = mt_rand(1, 1000);

    $b = pow($a, $n);

    $fp = fopen("otvet.txt", "a");
    $test = fwrite($fp, $b);
    if ($test) {
        echo 'Данные в файл успешно занесены.';
    } else {
        echo 'Ошибка при записи в файл.';
    }
    fclose($fp);
}