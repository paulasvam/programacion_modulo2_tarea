<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>factorial de un numero</title>
</head>
<body>

<?php
// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos el número ingresado por el usuario
    $numero = $_POST['numero'];

    // Validamos que el número sea un entero no negativo
    if (is_numeric($numero) && $numero >= 0) {
        $factorial = 1;

        // Calculamos el factorial
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }

        // Mostramos el resultado
        echo "El factorial de $numero es: $factorial";
    } else {
        echo "Por favor, ingresa un número entero no negativo.";
    }
} else {
?>
    <!-- Formulario para ingresar el número -->
    <form method="post">
        Ingrese un número entero no negativo: <input type="number" name="numero" min="0" required><br>
        <input type="submit" value="Calcular Factorial">
    </form>
<?php
}
?>

</body>
</html>