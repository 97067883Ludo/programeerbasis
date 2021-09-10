<?php
$random = rand(1,100);
$rangeTop = 100;
$rangeBottom = 0;
$kansen =3;
echo "raad het getal tussen 1 en 100 u mag 3 keer raden\n\n";


for($i =1; $i<=$kansen; $i++){
    echo "kies uw $i ste getal ";
    $gekozengetal = readline();
    if($gekozengetal == "stop"){
        exit();
    }

    if($gekozengetal > $rangeTop){
        echo "het getal mag niet groter zijn dan 100";
        exit();
    }

    if($gekozengetal <=$rangeBottom){
        echo "het getal mag niet kleinier of gelijk zijn aan 0";
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