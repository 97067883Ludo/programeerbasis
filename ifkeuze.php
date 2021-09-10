<?php
$naam = readline("geef je naam op ");
$leeftijd = readline("en jouw leeftijd is? ");

if($leeftijd < 22){
    echo "hallo $naam jij bent jonger dan 22 namelijk: $leeftijd";

}
if($leeftijd > 22){
    echo "hallo $naam jij bent ouder dan 22 namelijk $leeftijd";

}
if($leeftijd == 22){
    echo "hee, $naam jij bent toevallig precies 22 jaar oud";

}

?>