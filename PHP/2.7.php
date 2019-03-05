<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hesters Théophile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
   
   function cntVoyelles(string $s){
       $voyelles = array(
           array('a', 'e', 'i', 'o', 'u', 'y'),
           array(0, 0, 0, 0, 0, 0)
       );
       $tailleVoyelles = count($voyelles, COUNT_RECURSIVE) / count($voyelles) - count($voyelles);

       for($i = 0; $i < strlen($s); $i++)
           for($j = 0; $j < $tailleVoyelles ; $j++)
               if($s{$i} == $voyelles[0][$j])
                   $voyelles[1][$j]++;
       return $voyelles;
   }

   function shwVoyelles(array $voyelles){
       echo "il y a :<br />";
       for($i = 0; $i < 6; $i++)
           if($voyelles[1][$i] != 0)
               echo $voyelles[1][$i]." ".$voyelles[0][$i]."<br />";
   }
   
   $s = "La tesla modèle Y sera présentée en mars";

   shwVoyelles(cntVoyelles($s));
   ?>
</body>
</html>