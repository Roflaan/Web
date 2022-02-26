<?php
$text = fopen("categories/" . $_POST["adCategory"] . "/" . $_POST["adTitle"] . ".txt", "w");
fwrite($text, $_POST['adEmail'] . "\n");
fwrite($text, $_POST['adText']);
fclose($text);
header("Location: task3.php");