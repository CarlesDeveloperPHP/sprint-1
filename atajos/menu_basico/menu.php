<?php
do {
    $num =1;
    switch (menu()) {
    case 1:
        foreach ($arrayDices as $dice) {
            $dice->throw(); 
            echo "Dado $num : " . $dice->shapeName();
            $throws++;
            $num++;
        }
        break;
    case 2:
        echo "El total de dados tirados es: $throws \n";
        break;
    case 0:
        $salir = true;
        break;
    }
} while (!$salir);


function  menu() {
    $opcio =" ";
    $MINIMO = 0;
    $MAXIMO = 5;

    do {
        echo ("\n************ MENú PRINCIPAL ************ \n \n");
        echo ("1. Tirar los 5 dados. \n");
        echo ("2. Ver el total de dados tirados. \n");
        echo ("0. Salir del programa. \n \n");
        $opcio = intval(readline("Escoja una opción: \n"));
        if ($opcio < $MINIMO || $opcio > $MAXIMO) {
            echo("Opción no válida \n");
        }
    } while ($opcio < $MINIMO || $opcio > $MAXIMO);
    return $opcio;
}
?>

?>