<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['status'])){

    ?>
    <p>annonce non ajouter</p>
    <?php }?>
    <form action="./include/ajouterTraitemnt.php" method="POST">
        <input type="text" name="titreInput" placeholder="Enter titre">
        <input type="text" name="descInput" placeholder="Enter desc">
        <input type="date" name="DateInput" placeholder="Enter date">
        <input type="number" name="userIdInput" placeholder="Enter user id">
        <button type="submit" name="ajouter">Add</button>
    </form>
</body>
</html>