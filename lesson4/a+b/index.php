<?php
func();

function func()
{
    $arrayFile = file('chisla.txt');
    $sum = array_sum($arrayFile);

    $fp = fopen("chisla.txt", "a");
    $test = fwrite($fp, $sum);
    if ($test) {
        echo 'Данные в файл успешно занесены.';
    } else {
        echo 'Ошибка при записи в файл.';
    }
    fclose($fp);
}