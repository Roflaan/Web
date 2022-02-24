<?php
if (!session_start()) {
    echo "Ошибка";
    return;
}
echo "Ваши данные: ", $_SESSION['userName'], " ",$_SESSION['userSurname'], " ", $_SESSION['userAge'];
?>