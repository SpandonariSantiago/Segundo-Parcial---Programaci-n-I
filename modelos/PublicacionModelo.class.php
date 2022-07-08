<?php 

require "../utils/autoload.php";

    class PublicacionModelo extends Modelo{
        public $Username;
        public $FechaYHora;
        public $Publicacion;
        

        public function __construct($Username="", $FechaYHora=""){
            parent::__construct();
            if($Username != "" && $FechaYHora=""){
                $this -> Username = $Username;
                $this -> FechaYHora = $FechaYHora;
                $this -> Obtener();
            }
        }

        public function Guardar(){
            if($this -> Username == NULL AND $this -> FechaYHora == NULL) $this -> insertar();
            else $this -> actualizar();
        }

        private function insertar(){
            $sql = "INSERT INTO publicacion (Username, FechaYHora, publicacion) VALUES (
            '" . $this -> Username . "',
            'CURRENT_DATETIME',
            '" . $this -> publicacion . "')";

            $this -> conexionBaseDeDatos -> query($sql);
        }

        private function actualizar(){
            $sql = "UPDATE publicacion SET
            publicacion = '" . $this -> publicacion . "'
            WHERE Username = '" . $this -> Username . "' AND FechaYHora = '" . $this -> FechaYHora . "'";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function Obtener(){
            $sql = "SELECT * FROM publicacion WHERE Username = '" . $this -> Username . "' AND FechaYHora = '" . $this -> FechaYHora . "'";
            $fila = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC)[0];

            $this -> Username = $fila['Username'];
            $this -> FechaYHora = $fila['FechaYHora'];
            $this -> publicacion = $fila['publicacion'];
        }

        public function Eliminar(){
            $sql = "DELETE FROM publicacion WHERE Username = '" . $this -> Username . "' AND FechaYHora = '" . $this -> FechaYHora . "'";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function ObtenerTodos(){
            $sql = "SELECT * FROM publicacion";
            $filas = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $resultado = array();
            foreach($filas as $fila){
                $p = new PublicacionModelo();
                $p -> Username = $fila['Username'];
                $p -> FechaYHora = $fila['FechaYHora'];
                $p -> publicacion = $fila['publicacion'];
                array_push($resultado,$p);
            }
            return $resultado;
        }

    }