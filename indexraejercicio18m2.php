<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>temperatura</title>
</head>
<body>

<form method="post" action="">

    ingrese una  grados celsius: <input type="number" name="gra" required><br>
    <input type="submit" value="mostrar">
</for<m>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los valores del formulario
    $gra = $_POST['gra'];

    $far= ($gra*1.8)+32;
    echo "<p>La temperatura en fahrenheit es de: $far °F </p>";
}
?>

</body>
</html>