<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicación</title>
</head>
<body>

<form method="post">
    Ingrese un número: <input type="number" name="num1" required><br><br>
    <input type="submit" value="Mostrar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los valores del formulario
    $num1 = $_POST['num1'];

    // Validar si es un número
    if (is_numeric($num1)) {
        echo "<p>Tabla de multiplicación para $num1:</p>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>$num1 * $i = " . ($num1 * $i) . "</p>";
        }
    } else {
        echo "<p>Por favor ingrese un número válido.</p>";
    }
}
?>

</body>
</html>