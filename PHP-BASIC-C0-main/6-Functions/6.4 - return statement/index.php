<!DOCTYPE html>
<html>
<body>

<?php

function TienProcentKorting(){

    $koopPrijs = 85;
    $korting = 10;
    $kortingBerekening = ($koopPrijs / 100) * $korting;

    return $koopPrijs - $kortingBerekening;
}

    echo "Het totaal bedrag is: ";
    echo TienProcentKorting();
    echo " " ."euro";

?>


</body>
</html> 