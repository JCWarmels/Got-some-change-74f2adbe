<?php

$ToGive = intval($argv[1]);
if($ToGive != 0){
    echo("$ToGive x 1 euro");
}
else{
    echo("Geen wisselgeld.");
}

?>