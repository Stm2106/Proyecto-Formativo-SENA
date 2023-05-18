<?php
$numero1= 7000;
$numero2= 8000;
$numero3= 7500;
if ($numero1> $numero2 && $numero1>$numero3 && $numero2>$numero3 ) {
 echo "entre los numeros $numero1, $numero2 y $numero3, el numero mayor es: $numero1, el numero del medio es: $numero2, y el menor es: $numero3";
} elseif ($numero2> $numero1 && $numero2>$numero3 && $numero1>$numero3) {
    echo "entre los numeros $numero1, $numero2 y $numero3, el numero mayor es: $numero2, el numero del medio es: $numero1, y el menor es: $numero3";
    
}elseif($numero3> $numero1 && $numero3>$numero2 && $numero1>$numero2){
    echo "entre los numeros $numero1, $numero2 y $numero3, el numero mayor es: $numero3, el numero del medio es: $numero1, y el menor es: $numero2";
}else
echo "los numero $numero1, $numero2 y $numero3 son iguales";
?>