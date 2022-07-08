<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de usuario</h1> 
    <h2>Ingrese los datos del usuario</h2>
    
     <form action="/" method="post">
        <label for="NombreUsuario">Nombre de Usuario: </label>
        <input type="text" name="NombreUsuario" id="NombreUsuario"> 
        <label>(Tenga en cuenta que con este nombre lo veran los demas usuarios)</label><br /><br /> 

        <label for="NombreCompleto">Nombre completo: </label>
        <input type="text" name="NombreCompleto" id="NombreCompleto"><br /><br />

        <label for="Password">Contraseña: </label>
        <input type="password" name="Password" id="Password"><br /><br />

        <input type="submit" value="Crear Usuario">
    </form>
    
    <br /><a href='/login'>Volver</a>
    
</body>
</html>