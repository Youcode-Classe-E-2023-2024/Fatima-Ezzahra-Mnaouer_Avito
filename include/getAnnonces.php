<?php

function getAnnonces(){
    include_once "config.php";
    $annonces = [];
    $sql = "SELECT * FROM annonce;";
    $result = $db->query($sql);//Excute sql query 
    if($result->num_rows>0){ //vérifie s'il existe au moins  une ligne dans la BD 
        while($row = $result->fetch_assoc()){// fetching data from the $result object => array
            // print_r($row['titre']);
            $annonces[] = $row;
        }
    }

    return $annonces;
}

// $annonces = getAnnonces();
// foreach($annonces as $annonce){ 
//     print_r($annonce['id']);
// }






