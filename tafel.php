<?php
$tafel = readline("Welke tafel wil je zien?");
$begin = 1;
$max = 10;

echo "\n\nTafel van $tafel:\n";

for($teller=$begin; $teller<=$max; $teller++){
    $product=$teller*$tafel;
    echo "$teller x $tafel ";
    echo $product;
    echo "\n";


}


?>