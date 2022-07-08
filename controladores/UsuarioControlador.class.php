<?php 
    require "../utils/autoload.php";

    class UsuarioControlador {
        public static function Alta($context){
            $u = new UsuarioModelo();
            $u -> Username = $context['post']['username'];
            $u -> CompleteName = $context['post']['complete_name'];
            $u -> Password = $context['post']['password'];
            $u -> Guardar();
        }
    }

