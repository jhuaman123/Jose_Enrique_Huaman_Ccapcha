<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Datos del formulario</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $documento = $_POST["documento"];
        $direccion = $_POST["direccion"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $password = $_POST["password"];

        echo "<table border='1>";
        echo "<tr><th>Campo</th><th>Valor</th></tr>";
        echo "<tr><th>Nombre</th><th>".$nombre."</th></tr>";
        echo "<tr><th>Apellidos</th><th>".$apellidos."</th></tr>";
        echo "<tr><th>Documento</th><th>".$documento."</th></tr>";
        echo "<tr><th>Dirección</th><th>".$direccion."</th></tr>";
        echo "<tr><th>Celular</th><th>".$celular."</th></tr>";
        echo "<tr><th>E_MAIL</th><th>".$email."</th></tr>";
        echo "<tr><th>Login</th><th>".$login."</th></tr>";

        echo "</table>";
        
    }else{
        echo "Acceso no permitido";
    }
    
    ?>
</body>
</html>