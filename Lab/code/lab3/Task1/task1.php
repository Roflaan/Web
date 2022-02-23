<?php
session_start();
// Task1

//a
preg_match_all("/a.{2}b/", "ahb acb aeb aeeb adcb axeb", $array);
print_r($array);
echo "<br>";

//b
echo preg_replace_callback(
    "/[0-9]+/",
    function ($matches){
        return $matches[0] ** 2;
    },
    "a1b2c3");
?>

