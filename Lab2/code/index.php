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


//16 Функции
function increaseEnthusiasm(string $str): string
{
    return $str . "!";
}
echo increaseEnthusiasm("Hello"), "<br/>";
function repeatThreeTimes(string $str): string
{
    return $str . $str . $str;
}
echo repeatThreeTimes("Hello"), "<br/>";
echo increaseEnthusiasm(repeatThreeTimes("Hello")), "<br/>";
function cut(string $str, ?int $num = 10): string
{
    $result;
    $i = 0;
    while ($i < $num){
        $result .= $str[$i++];
    }
    return $result;
}
echo cut("Hello world!", 5), "<br/>";

//Рекурсия
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
function printArray(array $arr, int $i)
{
    if ($i < count($arr)){
        echo $arr[$i], " ";
        printArray($arr, ++$i);
    }
    return 0;
}
printArray($arr, 0);
echo "<br/>";

//Сумма цифр
function sum($x)
{
    $result = 0;
    while ($x > 0){
        $result += $x % 10;
        $x /= 10;
    }
    if ($result > 9){
        $result = sum($result);
    }
    return $result;
}
echo sum(451), "<br/>";


//17
$arrX = array();
$x = "x";
for ($i = 0; $i < 10; $i++){
    $arrX[$i] = $x;
    $x .= "x";
}
print_r($arrX);
echo "<br/>";

function arrayFill(string $c, int $num): array{
    $arr = array();
    $i = 0;
    while ($num > 0){
        $arr[$i++] = $c;
        $num--;
    }
    return $arr;
}
print_r(arrayFill("x", 10));
echo "<br/>";

$arr = array(array(1,2,3),array(4,5),array(6));
$sum = 0;
foreach ($arr as $value) {
    foreach ($value as $value2){
        $sum += $value2;
    }
}
echo $sum, "<br/>";

$l = 1;
for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
        $arr[$i][$j] = $l++;
    }
}
print_r($arr);
echo "<br/>";

$arr = array(2,5,3,9);
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result, "<br/>";

$user = [
    "surname" => "Конев",
    "name" => "Сергей",
    "patronymic" => "Максимович",
];
foreach ($user as $value){
    echo $value, " ";
}
echo "<br/>";

$date = [
    "year" => "2022",
    "month" => "02",
    "day" => "11",
];
echo $date["year"], "-", $date["month"], "-", $date["day"];
echo "<br/>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr), "<br/>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo end($arr), "<br/>";
echo prev($arr), "<br/>";


//18
function moreThan10(int $a, int $b): bool {
    if ($a + $b > 10) {
        return true;
    }
    else {
        return false;
    }
}
function areEqual(int $a, int $b): bool {
    if ($a === $b) {
        return true;
    }
    else {
        return false;
    }
}
$test = 0;
echo ($test == 0) ? "Верно<br/>" : "Неверно<br/>";
$age = 54;
if ($age > 10 && $age < 99){
    $sum = 0;
    while($age > 0){
        $sum += $age % 10;
        $age /= 10;
    }
    if ($sum < 10){
        echo "Сумма однозначна";
    }
    else{
        echo "Сумма двузначна";
    }
}
else{
    if ($age < 10){
        echo "Возраст меньше 10";
    }
    else{
        echo "Возраст больше 99";
    }
}
echo "<br/>";
$arr = array(2,5,3);
$sum = 0;
if (3 === count($arr)){
    foreach ($arr as $value){
        $sum += $value;
    }
    echo $sum, "<br/>";
}

//19
for ($i=1; $i<=20; $i++){
    for ($j=1; $j<=$i; $j++){
        echo "x";
    }
    echo "<br/>";
}
