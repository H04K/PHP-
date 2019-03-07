<html>
    <head>
        <meta charset="UTF-8"/>

</head>
<?php
if (isset($_REQUEST["mail"])&&   ($_REQUEST["mail"]!=NULL)){$mail = $_REQUEST["mail"];print ("<br>Adresse mail : $mail");} else {print ("<p>mail non d&eacute;fini !");}?>

</html>