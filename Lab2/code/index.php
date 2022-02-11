<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and large fries";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


//2
$varInt = 25;
echo "<br/>$varInt<br/>";
$varFloat = 5.25;
echo "$varFloat<br/>";
echo $varInt - 13, "<br/>";
$last_month = 1187.23;
$this_month = 1089.98;
echo "Difference between expences: ", $last_month - $this_month, "<br/>";


//11
$num_languages = 4;
$months = 11;
$days = 16 * $months;
$days_per_language = $days / $num_languages;
echo $days_per_language, " days she spent on each language<br/>";


//12
echo 8**2, "<br/>";


//13
$my_num = 12;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer, "<br/>";


//14
//Работа с %
$a = 10;
$b = 3;
echo $a % $b, "<br/>";
if ($a % $b === 0) {
    echo "Делится, разудьтат деления: ", $a / $b, "<br/>";
} else {
    echo "Делится с остатком, остаток: ", $a % $b, "<br/>";
}

//Работа со степенью и корнем
$st = pow(2,10);
echo $st, "<br/>";
echo sqrt(245), "<br/>";
$st = 0;
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as &$value) {
    $st += $value ** 2;
}
echo sqrt($st), "<br/>";

//Работа с функциями округления
echo round(sqrt(379)), "<br/>";
echo round(sqrt(379), 1), "<br/>";
echo round(sqrt(379), 2), "<br/>";
$arr2 = array("ceil"=>ceil(sqrt(587)), "floor"=>floor(sqrt(587)));
echo $arr2["ceil"], " ", $arr2["floor"], "<br/>";

//Работа с min и max
echo min(4, -2, 5, 19, -130, 0, 10), "<br/>";
echo max(4, -2, 5, 19, -130, 0, 10), "<br/>";

//Работа с рандомом
echo rand(1,100), "<br/>";
$randarr = array();
for ($i = 0; $i < 10; $i++){
    $randarr[$i] = rand();
    echo $randarr[$i], " ";
}
echo "<br/>";

//Работа с модулем
$a = 5;
$b = 10;
echo abs($a - $b), "<br/>";
echo abs(3 * $a - $b), "<br/>";
$arr = array(1, 2, -1, -2, 3, -3);
foreach ($arr as &$value) {
    $value =  abs($value);
}
for ($i = 0; $i < 6; $i++){
    echo $arr[$i], " ";
}

//Общее 1. Делители числа
$x = 30;
$arr = array();
for ($i = 1; $i <= $x/2; $i++){
    if($x % $i === 0){
        $arr[] = $i;
    }
}
$arr[] = $x;
echo "<br/>";
print_r($arr);

//Общее 2. Сумма больше 10
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$i = 0;
$sum = 0;
while ($sum < 10){
    $sum += $arr[$i];
    $i++;
}
echo "<br/>", ++$i, "<br/>";


//15 Функции
function printStringReturnNumber(string $str): int
{
    echo $str, "<br/>";
    return 21;
}
$my_num = printStringReturnNumber("www");
echo $my_num, "<br/>";
