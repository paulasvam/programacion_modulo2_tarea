<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora simple</title>
</head>
<body>

<form method="post" action="">
    ingrese una operacion matematica como suma +, resta -, multiplicacion *,  o division/ : <input type="text" name="operacion" required><br>
    ingrese el primer numero: <input type="number" name="num1" required><br>
    ingrese el segundo numero: <input type="number" name="num2" required><br>

    <input type="submit" value="mostrar">
</for<m>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los valores del formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

        // Calculamos el mayor
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $division = $num1 / $num2;
    

    switch ($operacion) {
        case "suma":
            echo "<p>El número mayor es: $suma</p>";
            break;
        case "resta";
            echo "<p>El número mayor es: $$resta</p>";
            break;
        case "multiplicacion";
            echo "<p>El número mayor es: $$multiplicacion</p>";
            break;
        case "division";
            echo "<p>El número mayor es: $$division</p>";
            break;
        default:
            echo "<p>La opcion ingresada no es valida</p>";
            break;
    }


}
?>

</body>
</html>