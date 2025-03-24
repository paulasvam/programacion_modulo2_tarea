<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mayor o menor</title>
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['numero_aleatorio'])) {
    $_SESSION['numero_aleatorio'] = rand(1, 100);
}

$adivinanzaCorrecta = false; // Variable para verificar si la adivinanza es correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adivinanza = $_POST['adivinanza'];

    if ($adivinanza < $_SESSION['numero_aleatorio']) {
        echo "El número es mayor. Intenta nuevamente.";
    } elseif ($adivinanza > $_SESSION['numero_aleatorio']) {
        echo "El número es menor. Intenta nuevamente.";
    } else {
        echo "¡Felicidades! Adivinaste el número.";
        $adivinanzaCorrecta = true; // Cambiamos a verdadero si se adivina correctamente
        session_destroy(); // Reiniciar juego
    }
}

// Solo mostramos el formulario si la adivinanza no fue correcta
if (!$adivinanzaCorrecta) {
?>
    <form method="post">
        Adivina el número (entre 1 y 100): <input type="number" name="adivinanza" required><br>
        <input type="submit" value="Adivinar">
    </form>
<?php
}
?>

</body>
</html>