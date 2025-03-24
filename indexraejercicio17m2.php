<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Palabras</title>
</head>
<body>

<form method="post" action="">

    ingrese una frase o palabra: <input type="text" name="pa1" required><br>

    <input type="submit" value="mostrar">
</for<m>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los valores del formulario
    $pa1 = $_POST['pa1'];

    // Convertimos la frase a minúsculas para simplificar la comparación
    $pa1 = strtolower($pa1);

    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;

    for ($i = 0; $i < strlen($pa1); $i++) {
        $caracter = $pa1[$i];
        if (in_array($caracter, $vocales)) {
            $contador++;
        }
    }

    echo "<p>La frase o palabra ingresada tiene $contador vocales.</p>";
}
?>

</body>
</html>