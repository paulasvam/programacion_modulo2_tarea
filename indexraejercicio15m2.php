<?php

$numero = 100; 
$pares = 0; 

for($i = $numero; $i >= 0; $i--){ 
if($i % 2 == 0){ 
    $pares = $pares + $i; 
}

} 
echo "<p>La suma de los numeros pares es igual a: $pares</p>";

?>

</body>
</html>