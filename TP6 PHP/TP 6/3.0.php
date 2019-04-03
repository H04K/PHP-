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
/* ajout_personne.php : ajoute la personne ($nom,$prenom) dans la table Personne de la base MaBase (déjà créée) et affiche la table complète */
/* Connexion et sélection de la base */
$host = "localhost"; $user="root"; 
$passwd="";$base="mabase";
$table="personne";$conn = mysqli_connect($host,$user,$passwd, $base);
if (mysqli_connect_errno()){echo "Erreur de connexion a MySQL: " . mysqli_connect_errno();
    exit(0);
}

/* Recherche de l'Id suivant dans la table (en supposant que Id = numéro de la ligne) */
$query = "SELECT * FROM $table";
$result = mysqli_query($conn, $query) or die("Echec de requête1");
$next_id = mysqli_num_rows($result) + 1;
mysqli_free_result($result);
/* Ajout de ($next_id,$nom,$prenom) dans la table */
$nom = "titi"; 
$prenom = "toto";
$query="INSERT INTO $table VALUES ('$next_id','$nom','$prenom')";
mysqli_query($conn, $query) or die("Echec de requête2");
/* Affichage complet de la table */
$query = "SELECT Nom,Prenom FROM $table";
$result = mysqli_query($conn, $query) or die("Echec de requête3");

echo "<table>\n";
while ($ligne=mysqli_fetch_array($result)) {echo "\t<tr>\n";
echo "\t\t<td>".$ligne['Nom']."</td>\n";
echo "\t\t<td>".$ligne['Prenom']."</td>\n";
echo "\t</tr>\n";}echo "</table>\n";
/* Libération du résultat */
mysqli_free_result($result);
/* Fermeture de la connexion */
mysqli_close($conn);
?>