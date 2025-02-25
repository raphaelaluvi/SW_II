<?php

    function teste($x){
        foreach ($x as $nome) {
            echo "$nome <br>";
        }
    }

    $vetor = ['Rapha', 'ETEC', 'MCM'];

    teste($vetor);
    
?>