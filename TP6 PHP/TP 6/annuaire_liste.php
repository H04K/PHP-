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


$connection = mysqli_connect($host, $user, $password, $base) or die(" ERREUR DE CONNEXION ".mysqli_connect_errno());

$query = "SELECT * FROM $table";


mysqli_query($connection, "set name utf8");

$result = mysqli_query($connection, $query) or die("ECHEC DE LA REQUETE".$query);



echo "<h3 style='text-decoration: underline;'>Liste :</h3>";
echo "<select><option selected>Id | Nom | Prénom | Adresse | Téléphone |</option>";

// MYSQLI_NUM pour ne récupérer un tableau qu'avec des clés entières, et donc les données qu'en une seule copie dans le tableau
while ($line = mysqli_fetch_array($result, MYSQLI_NUM))
{
    echo "<option>";
    foreach ($line as $data)
        echo "$data | ";
    echo "</option>";
}

echo "</select>";


mysqli_free_result($result);
mysqli_close($connection);

?>