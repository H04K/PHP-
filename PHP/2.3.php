<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hesters Théophile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table{
            text-align: center;
            border-collapse: collapse;
            border: 1px solid black;
        }
        td{
            height: 20px;
            width: 60px;
            border-collapse: collapse;
            border: 1px solid black;
        }
        td.gris{
            background-color : grey;
        }
    </style>
</head>
    <body>
        <?php
        $tab[0] = 1; # clé entière, valeur entière
        $tab[1] = "toto";# clé entière, valeur de type chaîne
        $tab["toto"] = "titi"; # clé et valeur de type chaîne

    $tab["toto"][0] = 1; # tableau à 2 dimensions
    $tabc["toto"][0]["titi"][3] = "toto"; # 4 dimensions !
    $tab[]="tata"; # la clé sera un entier dont la valeur est la clé entière la plus grande du tableau + 1
    $tab1 = array(1, "toto"); # 0 => 1 et 1 => "toto"
    $tab2 = array("toto"=>1, "titi"=>"toto");# clé donnéeNombre d'éléments d'un tableau
    echo sizeof($tab)."</br>";
    echo count($tab)."</br>";
    echo sizeof($tabc)."</br>";
    echo count($tabc)."</br>";
    echo sizeof($tab1)."</br>";
    echo count($tab1)."</br>";
    # retournent le nombre d'éléments du tableau $tab s'il existe, 1 si $tab n'est pas un tableau, 0 si $tab n'existe pas
        ?>
    </body>
</html>