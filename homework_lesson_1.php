<?php
/* Написать функцию которая по параметрам принимает число из десятичной системы счисления и преобразовывает в двоичную. Написать функцию которая выполняет преобразование наоборот.
*/

echo '<br/>' . '==========#1==========' . '<br/>';
function decimalToBinary($number) {
    if ($number == 0) {
        return 0;
    }
    return (10 * decimalToBinary($number / 2) + $number % 2);
}
$decimRes = decimalToBinary(6);
echo 'decimalToBinary - ' . $decimRes . '<br/>';

function binaryToDecimal($number, $i = 0) {
    $number = (string)$number;
    $numberLength = strlen($number);
    $res = 0;

    if ($i < $numberLength) {
        $res = intval($number[$i]) * pow(2, $numberLength - $i - 1);
        ++$i;
        return $res + binaryToDecimal($number, $i);
    }

    return $res;
}
$binaryRes = binaryToDecimal(10111);
echo 'binaryToDecimal - ' . $binaryRes . '<br/>';

/*Написать функцию которая выводит первые N чисел фибоначчи*/
echo '<br/>' . '==========#2==========' . '<br/>';

function getFibbonaci($n) {
//    Fn = Fn-1 + Fn-2
    $res = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $res[$i] = ($res[$i - 1] + $res[$i - 2]);
    }
    echo 'Fibbonaci: ' . implode(',', $res);
}
getFibbonaci(8);

/*Написать функцию, возведения числа N в степень M*/
echo '<br/>' . '==========#3==========' . '<br/>';
function powNToM($n, $m){
    if ($m < 0) {
        return powNToM( 1 / $n, -$m);
    }
    if ($m == 0) {
        return 1;
    }
    return $n * powNToM($n, $m - 1);
}
$res = powNToM(2, 3);
echo $res;

/*Написать функцию которая вычисляет входит ли IP-адрес в диапазон указанных IP-адресов. Вычислить для версии ipv4*/
echo '<br/>' . '==========#4==========' . '<br/>';
$ipArr = ['192.0.2.235', '192.10.3.5'];
$ipCheck = '192.0.3.1';

function checkIp($ip, $ipArr) {
    $ipArr = $ipArr;
    $ip = $ip;

    $ipRangeStart = ip2long($ipArr[0]);
    $ipRangeEnd = ip2long($ipArr[1]);
    $ipCheck = ip2long($ip);

    if ($ipCheck >= $ipRangeStart && $ipCheck <= $ipRangeEnd) {
        return 'IP allowed';
    } else {
        return 'IP denied';
    }
//    return $ipRangeStart;
}
echo checkIp($ipCheck, $ipArr);

/*Для одномерного массива
Подсчитать процентное соотношение положительных/отрицательных/нулевых/простых чисел
Отсортировать элементы по возрастанию/убыванию*/
