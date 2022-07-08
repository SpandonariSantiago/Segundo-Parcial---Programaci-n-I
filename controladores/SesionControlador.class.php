<?php 
    require "../utils/autoload.php";

    class SesionControlador {
        public static function IniciarSesion($context){
            $u = new UsuarioModelo();
            $u -> Username = $context['post']['username'];
            $u -> Password = $context['post']['password'];
            if($u -> Autenticar($u -> Username, $u -> Password)){
                SessionCreate("autenticado",true);
                SessionCreate("username", $u -> Username);
                header("Location: /");

            }
            render("login",["error" => true]);
        }

        public static function CerrarSesion($context){
            session_destroy();
            header("Location:/paginaPrincipal");
        }

       
    }

