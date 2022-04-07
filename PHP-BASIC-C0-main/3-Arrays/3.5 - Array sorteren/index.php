<!DOCTYPE html>
<html>
<body>

<?php

$laag_hoog = [576, 445, 687, 1, 46, 21, 42];
    asort($laag_hoog);

$hoog_laag = [576, 445, 687, 1, 46, 21, 42];
    arsort($hoog_laag);

    print_r($laag_hoog);
    echo "<br>";
    print_r($hoog_laag);

?>

</body>
</html> 