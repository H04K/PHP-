<?php
if (isset($_REQUEST["mail"]) && ($_REQUEST["mail"]!=NULL))
{$mail = $_REQUEST["mail"];
if (strlen($mail) < 6 ||! strpos($mail,'@') ||! strpos($mail,'.') )
{
    print ("<font color=red><b>Mail incorrect !</b></font> ");
    print ("<a href=lireMail.html>recommencez</a>");
    } 
else {   print ("Adresse mail : $mail");
}
}
?>
