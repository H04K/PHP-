<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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

<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Recherche</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <table class="table">
      <thead>
        <br />
        <tr>
          <th><a href="modif.php">Modifier</a></th>
          <th><a href="supprimer.php">Supprimer</a></th>
          <th><a href="menu.php">Menu</a></th>
          <th><a href="ajouter.php">Ajouter</a></th>
          <th><a href="afficher.php">Afficher</a></th>
        </tr>
      </thead>
    </table>
  </div>
   <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" id="contact"  enctype="multipart/form-data">
            <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label>Nom</label>
               <input type="text" name="nom1" class = "form-control"/>
                <label>Prénom</label>
                <input type="text" name="pre1" class = "form-control"/>

                <br />
                <button type="submit" class="btn btn-primary" name="envoi" id="sendMessageButton">Rechercher </button>
            </div>
</form>
</body>

</html>

<?php
$host = "localhost";
$base = "MaBase";
$table = "annuaire";
$user = "root";
$password = "";
 
// Si le formulaire a été envoyé
if (!empty ($_POST))
{
    $nom  = $_POST['nom1'];
	$pre  = $_POST['pre1'];

        
        $connection = mysqli_connect($host, $user, $password, $base) or die(" ERREUR DE CONNEXION ".mysqli_connect_errno()); // Connexion à MySQL

        $query = "SELECT * FROM $table
        WHERE Nom='$nom';";
        $result = mysqli_query($connection, $query);

        echo "<div class='container'><h3 style='text-decoration: underline;'>Tableau :</h3><table class='table table-dark table-hover'><tr><td>Id</td><td>Nom</td><td>Prenom</td><td>Adresse</td><td>Telephone</td></tr></div>";
        while ($line = mysqli_fetch_array($result, MYSQLI_NUM))
        {
            echo "<tr>";
            foreach ($line as $data)
                echo "<td>$data</td>";
            echo "</tr>";
        }
        

}

 
?>
