<?php
/*PHP-DESDE-CERO
9/11/16
Creado por Franklin Rony Cortez
Explicacion de variables en PHP y como declararlas.
-Las variables deben comenzar con el simbolo $
-Las variables pueden contener:Letras,numeros y guiones( _ ). No utilizar espacios.
-El primer caracter despues del $ no puede ser un numero.
-Los nombres de variables son sensibles a minusculas y mayusculas.

*/

$variable1="Esto es una cadena";
$variable_2=2;
$variable_3=3;
echo $variable1;
echo '<br/>';
echo $variable_2;
echo '<br/>';
echo "Tipo varible 1:".gettype($variable1);
echo '<br/>';
echo 'Tipo variable 2: '.gettype($variable_2);
//Cambio de variable dinamicamente
$variable1=$variable_2;
echo '<br/>';
echo $variable1;
echo '<br/>';
echo "Tipo varible 1:".gettype($variable1);
echo '<br/>';
//concatenar cadenas y variables

echo 'valor variable 2: '.$variable_2;
echo '<br/>';

echo "valor variable 2: {$variable_2}";
echo '<br/>';
echo 'valor variable 2: {$variable_2}';
echo '<br/>';
echo $variable_2+$variable_3;
echo '<br/>';
echo '2'+$variable_3;
echo '<br/>';
echo '2'.$variable_3;
//Constantes
define('PI',3.141516);
echo'<br/>';
echo PI;