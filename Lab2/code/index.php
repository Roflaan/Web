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
