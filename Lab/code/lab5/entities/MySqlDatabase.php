<?php

class MySqlDatabase
{
    private mysqli $mysqli;

    public function __construct()
    {
        $this->mysqliOpen();
    }

    private function mysqliOpen()
    {
        $this->mysqli = mysqli_connect('db', 'root', '123', 'web');
        if (mysqli_connect_errno()) {
            throw new mysqli_sql_exception();
        }
    }

    public function getAds() : array
    {
        $result = mysqli_query($this->mysqli, "SELECT*FROM ad");
        $ads = [];
        while($row = $result->fetch_assoc()){
            $ads[] = new Advert(
                $row['category'],
                $row['email'],
                $row['title'],
                $row['description']
            );
        }
        return $ads;
    }

    public function createAd(Advert $ad)
    {
        $preparedStatement = $this->mysqli->prepare("
			INSERT INTO ad (email, category, title, description)
			VALUES (?, ?, ?, ?);
		");

        $email = $ad->getEmail();
        $category = $ad->getCategory();
        $title = $ad->getTitle();
        $description = $ad->getDescription();

        $preparedStatement->bind_param('ssss', $email, $category, $title, $description);
        $preparedStatement->execute();
    }
}