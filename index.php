<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .nav{
            display:flex;
            justify-content: space-around;
            align-items:center;
        }
    </style>
</head>
<body>
    <div class="nav">
        <h1>Les Annonces</h1>
        <a href="./ajouterAnnonce.php">Ajouter</a>
    </div>
    <?php
        if(isset($_GET['status'])) {
    ?>
    <p>Annonce est ajouté</p>
    <?php }?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">User Id</th>
      <th scope="col">Tel</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include_once "./include/getAnnonces.php";
        $annonces = getAnnonces();
        foreach($annonces as $annonce){ 
            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                if($db == false){
                die("Error: " . mysqli_connect_error());
            }
            $annonceId = $annonce['userId'];
            $sql = "SELECT * FROM acteur WHERE userId = $annonceId";
            $result = $db->query($sql);
            $row = $result->fetch_assoc()
    ?>
    <tr>
      <th scope="row"><?php echo $annonce['id'] ?></th>
      <td><?php echo $annonce['titre'] ?></td>
      <td><?php echo $annonce['description'] ?></td>
      <td><?php echo $annonce['date'] ?></td>
      <td><?php echo $row['nom'] ?></td>
      <td><?php echo $row['tel'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>