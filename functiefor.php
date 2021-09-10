<?php

function func(){
    echo"deze echo komt uit de function\n";

}

for($i=0; $i<3; $i++){
    
    echo "echo we zitten in de $i e ronde\n";

    func();

}

?>