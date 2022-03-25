<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Файлы</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <form action="addingAdvert.php" method="POST"> Создать объявление <br><br>
      <input name="adTitle" placeholder="Введите название"><br>
      <input name="adEmail" placeholder="Введите email"><br>
      <textarea name="adText" rows="10" cols="50" placeholder="Текст объявления"></textarea><br>
      <label>Категория:</label><br>
      <select name="adCategory">
        <option>Купить</option>
        <option>Продать</option>
      </select><br><br>
      <button type="submit">Добавить</button>
    </form>
    <p>Список объявлений:</p>
    <table border="1">
        <?php

        ?>
    </table>
  </body>
</html>