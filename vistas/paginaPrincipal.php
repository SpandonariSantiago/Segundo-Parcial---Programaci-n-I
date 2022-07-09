<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>BLOG</h1><hr>
    <h2>Bienvenido a nuestro blog, donde podra publicar lo que usted quiera ☺</h2>

    <?php 
        require "../utils/autoload.php";
        if(isset($_SESSION['autenticado'])) :?>
            <hr><h3>Bienvenido <?php echo $_SESSION['username']; ?>. Si desea hacer una publicacion presione aqui:</h3>
            <a href='/altaPublicacion'>Hacer publicacion</a>

            <hr>
            <form action="/" method="post">

                <label for="username">¿Desea cerrar sesion?</label><br />
                <input type="text" name="username" id="username" value="<?= $_SESSION['username']; ?>" readonly><br /><br />

                <input type="submit" value="Cerrar sesion">
            </form>
            <hr>
            
        <?php else:?>
            <hr><h3>Si desea iniciar sesion presione aqui:</h3><a href='/login'>Iniciar sesion</a><hr>
        <?php endif?>

    <h3>Publicaciones</h3><hr>

    <?php foreach(PublicacionControlador::Listar() as $fila) :?>
            
            <b>Autor:</b> <?=$fila['username']?>  
            <b>&nbsp;&nbsp;Fecha de publicacion:</b> <?=$fila['fechaYHora']?><br />
            <b>&nbsp;&nbsp;Publicacin: </b> <?=$fila['publicacion']?><hr>
    
    <?php endforeach; ?><br />

</body>
</html>