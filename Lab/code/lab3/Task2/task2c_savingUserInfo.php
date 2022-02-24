<?php
if (!session_start()) {
    echo "Ошибка";
    return;
}
$_SESSION["userData"] = [
    "userName" => $_POST["userName"],
    "userSurname" => $_POST["userSurname"],
    "userSalary" => $_POST["userSalary"],
    "userBirthDate" => $_POST["userBirthDate"]
];
header("Location: task2c_newPage.php");

