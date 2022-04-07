<!DOCTYPE html>
<html>
<body>

<?php

$var = 12;
$var1 = 10;

if($var < 10 && $var1 > 5){
    echo "Het getal is tussen de 10 en de 5" . "<br>";
}
else{
    echo "Het getal is groter of kleiner dan tussen 10 en 5" . "<br>";
}

if($var < 10 || $var1 > 5){
    echo "het getal is groter dan 10 of kleiner dan 5" . "<br>";
}
else{
    echo"het getal zit tussen de 10 en de 5!" . "<br>";
}

if($var <10 xor $var1 > 5){
    echo "1 Van de twee waardes zijn goed als ik het goed heb" . "<br>";
}
else{
    echo "Blijkbaar had ik het fout" . "<br>";
}

if($var <10 != $var1 > 5){
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
else{
    echo "het getal zit tussen de 10 en de 5!" . "<br>";
}


?>

</body>
</html> 