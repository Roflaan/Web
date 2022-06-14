<?php

class AdvertController{
    private MySqlDatabase $mySqlRepository;
    private View $view;
    private bool $error = false;

    public function __construct()
    {
        $this->view = new View();
        try {
            $this->mySqlRepository = new MySqlDatabase();
        }catch (mysqli_sql_exception $e){
            $this->error = true;
        }
    }

    public function isError():bool {
        return $this->error;
    }

    public function post(){
        $ad = new Advert ($_POST["email"],$_POST["category"],$_POST["title"],$_POST["description"]);
        $this->mySqlRepository->createAd($ad);
        $this->view->advertsDisplay($this->mySqlRepository->getAds());
    }

    public function get(){
        $this->view->advertsDisplay($this->mySqlRepository->getAds());
    }

}