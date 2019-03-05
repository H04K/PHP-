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
<table>
<?php

$sortie = "";
    
    for($i = 1; $i < 10; $i++ ){
        $sortie.="<tr>";
        for($j = 1; $j <= 10; $j++){
            if($i == 1 )
               $sortie.="<td class='gris'>".$j."</td>";
            else if($j == 1)
              $sortie.="<td class='gris'>".$i."</td>";
            else
                $sortie.="<td >".$i*$j."</td>";
        }
        $sortie.="</tr>";
    }
    echo $sortie;
    ?>
</table>
</body>
</html>