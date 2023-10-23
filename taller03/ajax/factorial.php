<?php

    sleep(3);
    function factorial($numerofactorial) {
        if ($numerofactorial < 2) {
            return 1;
        } else {
            return($numerofactorial*factorial($numerofactorial-1));
        }
    }
        $num = $_POST['numerofactorial'];
        if ($num>=10) {
            echo "Prueba con un número menor a 10";
            exit();
        }
        if (!is_numeric($num)) {
            echo "Valor no válido, no es un número";
            exit();
        }
        
        $Factorial = factorial($num);
        echo"¡Correcto! el factorial es: " . $Factorial;
    


?>