<!DOCTYPE html>
<html>
<body>

<?php

$woordje = 'Hallo';
$zinnetje = 'mooie blauwe planeet!';

function zetWoordenAanElkaar($woordje, $zinnetje){
    $heleZin = $woordje . " " . $zinnetje;
    echo $heleZin;
}

zetWoordenAanElkaar($woordje, $zinnetje);

?>

</body>
</html> 