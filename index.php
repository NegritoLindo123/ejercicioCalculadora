<?php

    class Calculadora {

        //FUNCIÓN PARA SUMAR DOS NUMEROS
        function sumar($numero1,$numero2){

            $suma = $numero1 + $numero2;
            $operacion = "Suma";

            mostrarResultado($operacion,$suma);

        }

        //FUNCIÓN PARA RESTAR DOS NUMEROS
        function restar($numero1,$numero2){

            $resta = $numero1 - $numero2;
            $operacion = "Resta";

            mostrarResultado($operacion,$resta);

        }

        //METODO QUE VA A RETORNAR EL RESULTADO DE LA OPERACIÓN
        function mostrarResultado($operacion,$resultado){

            echo "El resultado de la ".$operacion." es: ".$resultado;

        }

    }