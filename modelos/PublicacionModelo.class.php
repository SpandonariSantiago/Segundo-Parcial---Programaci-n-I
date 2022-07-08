<?php 

require "../utils/autoload.php";

    class PublicacionModelo extends Modelo{
        public $username;
        public $fechaYHora;
        public $publicacion;
        

        public function __construct($username="", $fechaYHora=""){
            parent::__construct();
            if($username != "" && $fechaYHora=""){
                $this -> username = $username;
                $this -> fechaYHora = $fechaYHora;
                $this -> Obtener();
            }
        }

        public function Guardar(){
            if($this -> username == NULL AND $this -> fechaYHora == NULL) $this -> insertar();
            else $this -> actualizar();
        }

        private function insertar(){
            $sql = "INSERT INTO publicacion (username, fechaYhora, publicacion) VALUES (
            '" . $this -> username . "',
            'CURRENT_DATETIME',
            '" . $this -> publicacion . "')";

            $this -> conexionBaseDeDatos -> query($sql);
        }

        private function actualizar(){
            $sql = "UPDATE publicacion SET
            publicacion = '" . $this -> publicacion . "'
            WHERE username = '" . $this -> username . "' AND fechaYHora = '" . $this -> fechaYHora . "'";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function Obtener(){
            $sql = "SELECT * FROM publicacion WHERE username = '" . $this -> username . "' AND fechaYHora = '" . $this -> fechaYHora . "'";
            $fila = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC)[0];

            $this -> username = $fila['username'];
            $this -> fechaYHora = $fila['fechaYHora'];
            $this -> publicacion = $fila['publicacion'];
        }

        public function Eliminar(){
            $sql = "DELETE FROM publicacion WHERE username = '" . $this -> username . "' AND fechaYHora = '" . $this -> fechaYHora . "'";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function ObtenerTodos(){
            $sql = "SELECT * FROM publicacion";
            $filas = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $resultado = array();
            foreach($filas as $fila){
                $p = new PublicacionModelo();
                $p -> username = $fila['username'];
                $p -> fechaYHora = $fila['fechaYHora'];
                $p -> publicacion = $fila['publicacion'];
                array_push($resultado,$p);
            }
            return $resultado;
        }

    }