<!-- mesma coisa que o 4 -->
<?php
    function conta($x){
        $resultados = [];
        // vai armazenar os resultados
        for ($n = 1; $n < 11; $n ++) {
            $multi = $x * $n;
            $resultados[] = "$x x $n = $multi";
        }

        return $resultados;
    }
    
    $numero = 9;

    echo "A tabuada do número $numero é: <br> <br>";
    // aqui vai armazenar em uma variavel
    $tabuada = conta($numero);

    foreach ($tabuada as $linha) {
        echo $linha . "<br>";
    }
?>