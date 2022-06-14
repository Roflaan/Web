<?php
require_once "controllers/AdvertController.php";
require_once "entities/MySqlDatabase.php";
require_once "entities/Advert.php";
require_once "view/View.php";

$adController = new AdvertController();

if($adController->isError()){
    $adController->error();
    return;
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $adController->get();
    } else
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adController->post();
        }
} catch (mysqli_sql_exception $e){
    $adController->error();
}