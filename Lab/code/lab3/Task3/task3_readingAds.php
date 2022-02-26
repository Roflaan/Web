<?php
$categoriesDirectory = opendir("categories");
while ($categoryName = readdir($categoriesDirectory)) {
    if ($categoryName !== "." && $categoryName !== "..") {
        $ads[$categoryName] = [];
        $categoryPath = opendir("categories/" . $categoryName);
        while ($fileName = readdir($categoryPath)) {
            if ($fileName !== "." && $fileName !== "..") {
                $filePath = "categories/" . $categoryName . "/" . $fileName;
                $file = fopen($filePath, "r");
                $email = fgets($file);
                $text = NULL;
                while (!feof($file)) {
                    $text .= fgets($file);
                }
                fclose($file);
                $ads[$categoryName][substr($fileName, 0, strlen($fileName) - 4)] = [
                    "email" => $email,
                    "text" => $text
                ];
            }
        }
    }
}