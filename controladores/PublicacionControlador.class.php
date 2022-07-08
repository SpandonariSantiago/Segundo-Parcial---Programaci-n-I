<?php 
    require "../utils/autoload.php";

    class PublicacionControlador {
        public static function Alta($context){
            $p = new PublicacionModelo();
            $p -> Username = $context['post']['username'];
            $p -> Publicacion = $context['post']['publicacion'];
            $p -> Guardar();
        }
    }

