<?php
if(isset($_POST['ajouter'])){ //controler si l'ajoute button est clické
    include_once"config.php";

    $titre = $_POST['titreInput'];

    $description = $_POST['descInput'];

    $Date = $_POST['DateInput'];

    $userId = $_POST['userIdInput'];

    $sql = "insert into annonce (titre, description, date, userId) values(?,?,?,?);";
    $stmt = $db->prepare($sql);// 1- preparation de requete sql
    $stmt->bind_param("sssi", $titre, $description, $Date, $userId); //2- Binding params(remplissage de ? par son adequate valeurs )
    $result = $stmt->execute(); //3 execution de requete
    if($result)
    
    {
        header("location:../index.php?status=added");//retourner a la page home
        exit();
    }else{
        header("location:../ajouterAnnonce.php?status=error");//retourner a la page home
        exit();
    }



}else{
    echo "not found.";
}


