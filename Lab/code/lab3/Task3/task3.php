<!--    3     -->
<?php
include("task3_readingAds.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Файлы</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <form action="task3_addingAdvert.php" method="POST"> Создать объявление <br><br>
      <input name="adTitle" placeholder="Введите название"><br>
      <input name="adEmail" placeholder="Введите email"><br>
      <textarea name="adText" rows="10" cols="50" placeholder="Текст объявления"></textarea><br>
      <label>Категория:</label><br>
      <select name="adCategory">
          <?php
          foreach (array_keys($ads) as $value) {
              echo "<option>" . $value . "</option>";
          }
          ?>
      </select><br><br>
      <button type="submit">Добавить</button>
    </form>
    <p>Список объявлений:</p>
    <table border="1">
        <?php
        foreach ($ads as $categoryName => $categoryAds) {
            foreach ($categoryAds as $title => $ad) {
                echo "<td>" . $categoryName . "</td>" . "<td>" . $title . "</td>" . "<td>" . $ad["email"] . "</td>" . "<td width='50%'>" . $ad["text"] . "</td>" . "<tr>";
            }
        }
        ?>
    </table>
  </body>
</html>