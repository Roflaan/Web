<?php

class View{
    public function advertsDisplay(array $ads){
        $template = file_get_contents("view/template.html");
        $adsTable = "";
        foreach ($ads as $ad)
        {
            $adsTable.="<tr>";
            $adsTable.="<td>" . $ad->getEmail() . "</td>" . "<td>" . $ad->getCategory() . "</td>";
            $adsTable.="<td>" . $ad->getTitle() . "</td>" . "<td>" . $ad->getDescription() . "</td>";
            $adsTable.="</tr>";
        }
        $response = str_replace("tableplaceholder", $adsTable, $template);
        echo $response;
    }
}