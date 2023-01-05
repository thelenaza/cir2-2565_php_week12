<?php
//1.closure function
$sum = function($a,$b){
    return array($a,$b);
};
[$a,$b] = sum(10,5);
print($a+$b . "<br />");

//2.arrow function
$result = fn($a,$b) =>$a+$b;
$total = $result(10,5);
print($total);

//3.arrow function with division
$division = fn($a,$b)=>array($a,$b);
[$a,$b] = $division(50,5);
print($a/$b);

//4.arrow funtion with multple
$multiply = fn($a,$b)=>array($a,$b);
[$a,$b] = $multiply(100,2);
print($a*$b);
?>