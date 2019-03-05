<?php

function deb(){
    echo('<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
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
    <body>');
}

function fin(){
    echo('</body>
    </html>');
}   
function tableau(){
    echo("<table >");
    for($i = 1; $i < 10; $i++){
        echo("<tr>");
        for($j = 1; $j <= 10; $j++){
            if($i == 1 )
                echo("<td class='gris'>".$j."</td>");
            else if($j == 1)
                echo("<td class='gris'>".$i."</td>");
            else
                echo("<td >".$i*$j."</td>");
        }
        echo("</tr>");
    }
    echo("</table>");
}

deb();
tableau();
fin();

?>