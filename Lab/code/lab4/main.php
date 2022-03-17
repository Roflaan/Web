<?php
require_once __DIR__ . '/vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "13SQ4laBMn9d3uv61IwNoAHMLJqirC_AIPrYi8uY9lq4"; //full link: https://docs.google.com/spreadsheets/d/13SQ4laBMn9d3uv61IwNoAHMLJqirC_AIPrYi8uY9lq4/edit?hl=ru#gid=0
$range = "Sheet1";
$values = $service->spreadsheets_values->get($spreadsheetId, $range);
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
        foreach ($values as $row){
            foreach ($row as $column){
                echo "<td>" , $column , "</td>";
            }
            echo "<tr>";
        }
        ?>
    </table>
  </body>
</html>