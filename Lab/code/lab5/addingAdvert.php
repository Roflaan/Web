<?php
$link = mysqli_connect('db', 'root', '123', 'web');
$query = "INSERT INTO ad (email, title, description, category) 
VALUES ('{$_POST['adEmail']}', '{$_POST['adTitle']}', '{$_POST['adText']}', '{$_POST['adCategory']}')";
$link = mysqli_query($link, $query);
$link->close();
header("Location: main.php");
