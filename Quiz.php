<?php
$rangeTop = 25;
$rangeBottom = 20;
$kansen =4;

$random = rand($rangeBottom, $rangeTop);
echo "\n\nraad het getal tussen $rangeBottom en $rangeTop u mag $kansen keer raden\n\n";


for($i =1; $i<=$kansen; $i++){
    echo "kies uw $i ste getal ";
    $gekozengetal = readline();
    if($gekozengetal == "stop"){
        exit();
    }

    if($gekozengetal > $rangeTop){
        echo "het getal mag niet groter zijn dan $rangeTop";
        exit();
    }

    if($gekozengetal < $rangeBottom){
        echo "het getal mag niet kleinier of gelijk zijn aan $rangeBottom";
        exit();
    }

    if($random == $gekozengetal){
        echo "YAYY, je hebt het geraden!";
        exit();
    }

    if($random != $gekozengetal && $i<$kansen){
        echo "helaas probeer het nogmaals\n";
    }
}
echo "het getal was $random";

?>