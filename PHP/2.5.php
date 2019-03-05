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
   $voyelles = array(
    array('a', 'e', 'i', 'o', 'u', 'y'),
    array(0, 0, 0, 0, 0, 0)
    );

$s = "La tesla modèle Y sera présentée en mars";

for($i = 0; $i < strlen($s); $i++)
    for($j = 0; $j < 6; $j++)
        if($s{$i} == $voyelles[0][$j])
            $voyelles[1][$j]++;

echo " Dans le texte suivant : </br>";
    echo $s."</br>";
echo "il y a :<br />";
for($i = 0; $i < 6; $i++)
    if($voyelles[1][$i] != 0)
        echo $voyelles[1][$i]." ".$voyelles[0][$i]."<br />";
        ?>
    </body>
</html>