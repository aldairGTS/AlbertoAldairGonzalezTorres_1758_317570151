<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $contrasena = $_POST["contrasena"];

    // Aquí puedes hacer la verificación de los datos.
    // Por ejemplo, si el nombre es "John", la edad es 30 y la contraseña es "secreto", considerando que son los datos correctos:
    if ($nombre == "Aldair" && $contrasena == "secreto") {
        echo "Mi nombre es: $nombre, tengo $edad años.";
    } else {
        echo "Tus datos no coinciden. ";
        echo "<a href='index.html'>Regresar al formulario</a>";
    }
}
?>
