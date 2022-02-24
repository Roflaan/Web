<?php
if (!session_start()) {
    echo "Ошибка";
    return;
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Форма. Сессии и Куки.</title>
  </head>
  <body>
    <ul>
      <?php
      foreach ($_SESSION["userData"] as $value) {
          echo "<li>$value</li>";
      }
      ?>
    </ul>
  </body>
</html>

