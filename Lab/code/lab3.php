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


<!--    2      -->

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