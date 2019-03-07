<HTML>

<HEAD>
    <TITLE> tout en un </TITLE>
    <script langage=javascript>
        mail = /^[a-zA-Z0-9]+[a-zA-Z0-9\.-_]+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9])+$/;

        function sMail() {
            ok = mail.test(document.forms[0].elements[1].value) if (!ok) {
                alert("adresse mail invalide !");
                return false;
            }
        }
    </script>
</HEAD>

<BODY BGCOLOR="#e3e3e3">
    <?php
    if ( empty($_REQUEST["mail"]) ){
    ?>
    <form name="remarque" action="remarque.php" method="post" onSubmit="return sMail();">Votre commentaire :<br>
    <textarea
            name=texte></textarea><br>Votre e-mail ?<br>
        <input name=mail><input type=submit value="envoyer">
    </form>
    <?php
} else {print ("Merci de votre commentaire<br> ");
print ("Nous vous r&eacute;pondrons &agrave; ".$_REQUEST["mail"]);
}
?>
</BODY>

</HTML>