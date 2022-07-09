<?php 
    require "../utils/autoload.php";

    class PublicacionControlador {
        public static function Alta($context){
            $p = new PublicacionModelo();
            $p -> Username = $context['post']['username'];
            $p -> Publicacion = $context['post']['publicacion'];
            $p -> Insertar();
            render("altaPublicacion",["error" => false]);
        }

        public static function Listar(){
            $p = new PublicacionModelo();
            $publicacion = $p -> ObtenerTodos();

            $resultado = array();
            foreach($publicacion as $elemento){
                $a = array(
                    'username' => $elemento -> Username,
                    'fechaYHora' => $elemento -> FechaYHora,
                    'publicacion' => $elemento -> Publicacion,
                );
                array_push($resultado,$a);
            }
            return $resultado;
        
        }
    }

