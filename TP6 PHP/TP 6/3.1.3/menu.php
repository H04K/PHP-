<!DOCTYPE html>
<html lang="en">

<head>
    <title>TP6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- BOOSTRAP en mode non local-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>


    <div class="container-fluid bg-1 text-center">
      <br/>
       <u><h1>3.1.3 Gestions BDD </h1></u>
    </div>

    
    <div class="container">
    
    
    <table class="table">
      <thead>
        <br />
        <tr>
          <th><a href="modif.php">Modifier</a></th>
          <th><a href="supprimer.php">Supprimer</a></th>
          <th><a href="rechercher.php">Rechercher</a></th>
          <th><a href="ajouter.php">Ajouter</a></th>
          <th><a href="afficher.php">Afficher</a></th>        </tr>
      </thead>
    </table>
  </div>

</body>

</html>

<?php

$host = "localhost";    
$base = "MaBase";     
$table = "annuaire";
$user = "root";         
$password = "";

$connection = mysqli_connect($host, $user, $password, $base) or die("Erreur de connexion au serveur MySQL : ".mysqli_connect_errno());

$query = "SELECT * FROM $table";



$result = mysqli_query($connection, $query) or die("Echec de la requête suivante :<br />".$query);



echo "<br /><div class='container-fluid bg-1 text-center'><h3>Etat de la BDD</h3><br /><table class='table table-dark table-hover'><tr><td>Id</td><td>Nom</td><td>Prenom</td><td>Adresse</td><td>Telephone</td></tr></div>";


while ($line = mysqli_fetch_array($result, MYSQLI_NUM))
{
    echo "<tr>";
    foreach ($line as $data)
        echo "<td>$data</td>";
    echo "</tr>";
}

echo "</table>";


mysqli_free_result($result);
mysqli_close($connection);
?>