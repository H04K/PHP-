<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <!-- BOOSTRAP en mode non local-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>

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



echo "<div class='container'><h3 style='text-decoration: underline;'>Tableau :</h3><table class='table table-dark table-hover'><tr><td>Id</td><td>Nom</td><td>Prenom</td><td>Adresse</td><td>Telephone</td></tr></div>";


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