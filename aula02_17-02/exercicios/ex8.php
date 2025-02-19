<?php
    $numero = 9;

    echo "A tabuada do $numero é:";
    echo "<br>"; 

    for ($n = 1; $n < 11; $n ++) {
        $multi = $numero * $n;
        echo "$numero x $n é $multi"; 
        echo "<br>";
    }
?>