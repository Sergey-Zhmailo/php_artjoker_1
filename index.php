<?php
// lesson 1 
// нормализованные числа


// 0.32 * 2 = 0.64 (0)
// 0.64 * 2 = 1.28 (1)
// 0.28 * 2 = 0.56 (0)
// 0.56 * 2 = 1.12 (1)
// 0.12 *

// 10.001010 * 2^-2 = 0.10001010

// sign = 0; // 1

// 1 * 10001010 * 2^(-2)

// 1 11111111110 0 00000000010001010


// class Rectangle {
//     private $width;
//     private $height;
//     public function __construct($width, $height)
//     {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function square(){
//         return $this->width * $this->height;
//     }
// }

// $rectangle = new Rectangle(3, 10);
// $rectangle2 = new Rectangle(2, 10);
// $rectangle3 = new Rectangle(23, 140);

// echo $rectangle3->square();

// function f($a){
//     if($a > 5){
//         return;
//     }
//     echo $a;

//     f(++$a);
// }