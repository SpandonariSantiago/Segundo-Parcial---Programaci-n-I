<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>REGISTRO DE USUARIO</h1> 
    <hr><h2>Ingrese los datos del usuario</h2><hr>
    
    <br /> 
    <form action="/altaUsuario" method="post">
        <label for="username">Nombre de Usuario: </label>
        <input type="text" name="username" id="username"> 
        <label>(Tenga en cuenta que con este nombre lo veran los demas usuarios)</label><br /><br /> 

        <label for="complete_name">Nombre completo: </label>
        <input type="text" name="complete_name" id="complete_name"><br /><br />

        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password"><br /><br />

        <input type="submit" value="Crear Usuario">
        <input type="reset" value="Vaciar">
    </form>
    <br /><hr>
    
    <br /><a href='/login'>Volver</a><br />

    <?php if(isset($parametros['error']) && $parametros['error'] === false ) :?>
        <br /><hr>
        <div style="color: green;">Usuario creado correctamente</div>
    <?php endif;?>
    
</body>
</html>