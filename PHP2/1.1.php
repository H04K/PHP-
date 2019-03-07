<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hesters Théophile</title>
    <style>
        fieldset{
        width: 170px;
        display : flex;
    }
    input{
        width: 50px;
        height: 15px;
    }
    .submit{
        width: 70px;
        height: 20px;
    }
    select{
        width: 35px;
        height: 25px;
    }
    </style>
</head>

<body>
    <fieldset>
        <legend><b>Calculatrice </b></legend>
        <form action="1.1.php" method="POST">
            <?php
            session_start();
            $val1 = '';
            $val2 = '';
            if(!empty($_REQUEST['val1']) && !empty($_REQUEST['val2'])){
                $val1 = floatval(preg_replace("/[^0-9^.^,]/", "", $_REQUEST['val1']));
                $val2 = floatval(preg_replace("/[^0-9^.^,]/", "", $_REQUEST['val2']));
            }
            echo "<input type=\"text\" name=\"val1\" value=\" $val1 \">";
            ?>
            <select name="op">
                <option value="/">/</option>
                <option value="-">-</option>
                <option value="+">+</option>
                <option value="*">*</option>
            </select>
            <?php
            echo "<input type=\"text\" name=\"val2\" value=\" $val2 \">";
            ?>
            <br>
            <br>
            <input class="submit" type="submit" value="calculer">
            <br>
            <br>
            <?php
            if (!empty($_SESSION['resultat_old']))
                echo "Resultat precedent : ". $_SESSION['resultat_old']. "<br />";
 
            if(!empty($val1) && !empty($val2)) {
                    if($_REQUEST['op'] == '+'){
                        echo $val1 . ' + '. $val2 . " = " . ($val1 + $val2);
                        $_SESSION['resultat_old'] = $val1 + $val2;
                    }
                    if($_REQUEST['op'] == '-'){
                        echo $val1 . ' - ' . $val2 . " = " . ($val1 - $val2);
                        $_SESSION['resultat_old'] = $val1 - $val2;
                    }
                    if($_REQUEST['op'] == '*'){
                        echo $val1 . ' x ' . $val2 . " = " . ($val1 * $val2);
                        $_SESSION['resultat_old'] = $val1 * $val2;
                    }
                    if($_REQUEST['op'] == '/'){
                        echo $val1 . ' / ' . $val2 . " = " . ($val1 / $val2);
                        $_SESSION['resultat_old'] = $val1 / $val2;
                    }
                }
            ?>
        </form>
    </fieldset>
</body>

</html>