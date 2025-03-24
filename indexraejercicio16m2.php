<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas</title>
</head>
<body>

<form method="post" action="">

    ingrese el primera nota: <input type="number" name="num1" required><br>
    ingrese el segunda nota: <input type="number" name="num2" required><br>

    <input type="submit" value="mostrar">
</for<m>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los valores del formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


        // Calculamos el mayor
        $promedio = ($num1 + $num2) / 2;
        echo  "<p>El resultado de su promedio de notas es de: $promedio</p>";

}        
?>

</body>
</html>