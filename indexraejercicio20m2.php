<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mayor o menor</title>
</head>
<body>

<form method="post" action="">
    Ingrese su edad: <input type="number" name="edad" required><br>
    <input type="submit" value="mostrar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los valores del formulario
    $edad = $_POST['edad'];

if ($edad >= 18) {
    echo "<p>Usted es mayor de edad</p>";
} else { 
    echo "<p>Usted es menor de edad</p>";
}
}
?>

</body>
</html>