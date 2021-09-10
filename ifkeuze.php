<?php
$naam = readline("geef je naam op ");
$leeftijd = readline("en jouw leeftijd is? ");
$leeftijdifstate = 22;

if($leeftijd < $leeftijdifstate){
    echo "hallo $naam jij bent jonger dan 22 namelijk: $leeftijd";

}
if($leeftijd > $leeftijdifstate){
    echo "hallo $naam jij bent ouder dan 22 namelijk $leeftijd";

}
if($leeftijd == $leeftijdifstate){
    echo "hee, $naam jij bent toevallig precies 22 jaar oud";

}

?>