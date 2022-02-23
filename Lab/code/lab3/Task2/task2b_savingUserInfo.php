<?php
if (!session_start()) {
    echo "Ошибка";
    return;
}
$_SESSION['userName'] = $_POST['userName'];
$_SESSION['userSurname'] = $_POST['userSurname'];
$_SESSION['userAge'] = $_POST['userAge'];
header("Location: task2b_newPage.php");
?>



