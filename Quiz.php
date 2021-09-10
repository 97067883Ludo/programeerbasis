<?php
$random = rand(1,100);
$rangeTop = 100;
$rangeBottom = 0;
echo "raad het getal tussen 1 en 100 u mag 3 keer raden\n\n";


for($i =1; $i<=3; $i++){
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

    if($random != $gekozengetal){
        echo "helaas probeer het nogmaals\n";
    }
    if($random == $gekozengetal){
        echo "YAYY, je hebt het geraden!";
        exit();
    }

}
echo "het getal was $random";

?>