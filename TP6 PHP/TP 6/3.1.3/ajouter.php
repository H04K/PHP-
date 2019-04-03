<!DOCTYPE <!DOCTYPE html>
<html>
<head>
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
    <meta charset="utf-8">

</head>
<body>
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>AJOUTER</h1>
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
          <th><a href="rechercher.php">Rechercher</a></th>
          <th><a href="menu.php">Menu</a></th>
          <th><a href="afficher.php">Afficher</a></th>
          
        </tr>
      </thead>
    </table>
  </div>
  <form method="post" enctype="multipart/form-data" id="contact" onsubmit="setTimeout(function(){window.location.reload();},10)" enctype="multipart/form-data">
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
                <label>Adresse</label>
                <input type="text" name="adr1" class = "form-control"/>
                <label>Télephone</label>
                <input type="text" name="tel1" class = "form-control"/>
                <br />
                <button type="submit" class="btn btn-primary" name="envoi" id="sendMessageButton">Modifier</button>
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
	$adr  = $_POST['adr1'];
	$tel  = $_POST['tel1'];

        
        $connection = mysqli_connect($host, $user, $password, $base) or die(" ERREUR DE CONNEXION ".mysqli_connect_errno()); // Connexion à MySQL

        $query = "INSERT INTO annuaire (Nom,Prenom,Adresse,Telephone) values('$nom','$pre','$adr','$tel')";
        $result = mysqli_query($connection, $query);

}

 
?>
 
