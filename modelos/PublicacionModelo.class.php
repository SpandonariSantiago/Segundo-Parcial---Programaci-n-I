<?php 

require "../utils/autoload.php";

    class PublicacionModelo extends Modelo{
        public $Username;
        public $FechaYHora;
        public $Publicacion;
        

        public function __construct(){
            parent::__construct();
        }

        public function Insertar(){
            $sql = "INSERT INTO publicacion (Username, FechaYHora, publicacion) VALUES (
            '" . $this -> Username . "',
            CURRENT_TIME,
            '" . $this -> Publicacion . "')";

            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function ObtenerTodos(){
            $sql = "SELECT * FROM publicacion";
            $filas = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $resultado = array();
            foreach($filas as $fila){
                $p = new PublicacionModelo();
                $p -> Username = $fila['username'];
                $p -> FechaYHora = $fila['fechaYHora'];
                $p -> Publicacion = $fila['publicacion'];
                array_push($resultado,$p);
            }
            return $resultado;
        }

    }