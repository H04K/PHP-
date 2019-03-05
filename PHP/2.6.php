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
   function maximum($a,$b) {
    if ($a>$b)
            return $a;
    else
        return $b;
    }
    $m = maximum(5, 8);
     
    echo "m vaut ".$m;
        ?>
    </body>
</html>