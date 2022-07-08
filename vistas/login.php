<?php 
    require "../utils/autoload.php";

     if(isset($_SESSION['autenticado']))
        header("Location: /");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Inicio de sesion</h1><hr>
    
    <br />
    <form action="/login" method="post">
        <label for="username">Nombre de Usuario: </label>
        <input type="text" name="username" id="username"><br /><br />

        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password"><br /><br />

        <input type="submit" value="Iniciar Sesión">
    </form>
    <br /><hr>

    <a href="/altaUsuario">Crear Usuario</a>

    <br /><hr>
    
    <a href='/'>Volver</a>
    
    <?php if(isset($parametros['error']) && $parametros['error'] === true ) :?>
        <br /><hr>
        <div style="color: red;">Credenciales invalidas.</div>
    <?php endif;?>

    
</body>
</html>