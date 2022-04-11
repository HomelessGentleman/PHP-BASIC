<!DOCTYPE html>
<html>
<body>

<?php

function mijnNaamGroot(){

    $voornaam = 'Ernest';
    $achternaam = 'Acheampong';

    $geheleNaam = $voornaam . " " . $achternaam;
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;
 
}   

mijnNaamGroot();

?>

</body>
</html> 