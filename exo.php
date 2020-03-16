<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo algorithme</title>
</head>
<body>

<h2>exo 1 et exo 2</h2>

<?php
   $a = 10;
   echo ("le resultat le plus grand est")." ". $a;
?>
<br>
<?php 
   $b = 5;
   echo ("le resultat le plus petit est")." ". $b;
?>

<h2>exo 3</h2>

<?php
   $a = 10;
   $b = 5;
     if ($a==10 && $b==5){
        echo ("a vaut")." ". $b . " et " .("b vaut")." ".$a;
}
?>

<h2>exo 4</h2> 

<?php 
   $a = 10;
   $b = 5;

   $resultat= $a + $b;
   echo $resultat;
   ?>

<h2>exo 5</h2>

<?php
   echo rand(0, 100);
?>

<h2>exo 6</h2>

<?php
   echo rand(5, 10)
?>

<h2>exo 7</h2>

<?php

   function nbresultat($a, $b){
       $resultat = $a + $b;
       return $resultat;
   }

   $resultat = nbresultat(10, 5);
   echo ('l\'addition de a et b vaut: ') . $resultat;

?>

<h2>exo 8</h2>

<?php

$x = rand (1, 100);
if ($x < 50) {
    echo "Le résultat est $x donc je suis nul <br>";
} elseif ($x >= 50) {
    echo "Le résultat est $x donc je suis bon <br>";
} 
?>

<h2>exo 9</h2>

<?php

$x = rand (0, 5);
 if ($x == 1){
    echo "AAAA";
}
 if ($x == 2){
     echo "BBBB";
 }
 if ($x == 3){
     echo "CCCC";
 }
 if ($x == 4){
     echo "DDDD";
 }
if ($x == 0){
    echo "je suis une perruche";
}
if ($x == 5){
    echo "jesuis une perruche";
}

?>

<h2>exo 10</h2>

<?php
$x = rand (0, 5);

switch ($x) {
    case 0:
        echo "je suis une perruche";
        break;
    case 1:
        echo "AAAA";
        break;
    case 2:
        echo "BBBB";
        break;
    case 3:
        echo " CCCC";
        break;
    case 4:
        echo " DDDD";
        break;
    case 5:
        echo " je suis une perruche";
        break;
}

?>

<h2>exo 11</h2>

<?php

echo rand() . "\n<br>"; 
echo rand() . "\n<br>";
echo rand() . "\n<br>"; 
echo rand() . "\n<br>";
echo rand() . "\n<br>"; 
echo rand() . "\n<br>"; 
echo rand() . "\n<br>";
echo rand() . "\n<br>"; 
echo rand() . "\n<br>";
echo rand() . "\n<br>"; 


?>

<h2>exo 12</h2>

<?php 

$table=[];
$add=0;
for($i=0;$i<10;$i++){
    $table[$i]=rand(0,100);
    $res=$table[$i];
    echo "$res";
    echo "<br>";
    $add=$add+$res;
}


echo "<h2>exo 13</h2><br><br>";
   

echo "Le resultat est : $add";

?>
</body>
</html>