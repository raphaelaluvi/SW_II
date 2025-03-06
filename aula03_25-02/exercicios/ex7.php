<!-- igual ao 5 -->
<?php
    function soma($n) {
        $soma = 0;

        foreach ($n as $numero) {
            $soma += $numero;
        }

        return $soma;
    }

    $valores = [2, 4, 6, 8];

    echo "A soma dos elementos é: " . soma($valores);
?>