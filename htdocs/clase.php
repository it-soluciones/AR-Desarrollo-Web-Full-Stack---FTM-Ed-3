<?php
//escribir una funcion 2 numerso enteros,muestre todos los pares entre ellos

echo "hola mundo";

function pares($a,$b){
    for($i=$a;$i<=$b,$i++){
        if($i%2==0){echo $i.'<br>';}
    }
}

pares(3,11)

?>
