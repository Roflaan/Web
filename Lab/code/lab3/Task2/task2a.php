<!--    2a     -->

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Форма. Сессии и Куки.</title>
  </head>
  <body>
    <form method="POST">
      <textarea name="text" placeholder="Введите текст"></textarea>
      <input type="submit" name="getTextInfo" value="Принять">
    </form>

  </body>
</html>

<?php
if ($_POST["getTextInfo"]) {
    echo str_word_count($_POST["text"]), " слов<br>";
    echo mb_strlen($_POST["text"]), " символов<br>";
}
?>