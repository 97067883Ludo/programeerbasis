<?php

$stop = "nee";
$teller = 0;

while($stop == "nee"){

    echo "Wil je stoppen?\n";
    $stop = readline();
    echo "dit is ronde $teller\n";
    $teller ++;
    if($stop == "ja"){
        echo "dit was de laatste ronde. Ronde : $teller";
    }

}

?>