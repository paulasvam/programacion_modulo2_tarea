<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mayor o menor</title>
</head>
<body>

<form method="post" action="">
    Número 1: <input type="number" name="num1" required><br>
    Número 2: <input type="number" name="num2" required><br>
    Número 3: <input type="number" name="num3" required><br>
    <input type="submit" value="mostrar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los valores del formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Calculamos el mayor
    $mayor = $num1;
    if ($num2 > $mayor) {
        $mayor = $num2;
    }
    if ($num3 > $mayor) {
        $mayor = $num3;
    }

    // Calculamos el menor
    $menor = $num1;
    if ($num2 < $menor) {
        $menor = $num2;
    }
    if ($num3 < $menor) {
        $menor = $num3;
    }

// Ordenamos los números de mayor a menor con comparaciones directas
if (($num1 >= $num2) && ($num2 >= $num3)) {
    echo "<p>$num1 <br> $num2 <br> $num3</p>";
} elseif (($num1 >= $num3) && ($num3 >= $num2)) {
    echo "<p>$num1 <br> $num3 <br> $num2</p>";
} elseif (($num2 >= $num1) && ($num1 >= $num3)) {
    echo "<p>$num2 <br> $num1 <br> $num3</p>";
} elseif (($num2 >= $num3) && ($num3 >= $num1)) {
    echo "<p>$num2 <br> $num3 <br> $num1</p>";
} elseif (($num3 >= $num1) && ($num1 >= $num2)) {
    echo "<p>$num3 <br> $num1 <br> $num2</p>";
} else { 
    echo "<p>$num3 <br> $num2 <br> $num1</p>";
}

    // Mostramos el resultado
    echo "<p>El número mayor es: $mayor</p>";
    echo "<p>El número menor es: $menor</p>";
}
?>

</body>
</html>
