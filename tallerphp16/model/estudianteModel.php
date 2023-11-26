<?php
    class estudianteModel {
        private $PDO;

        public function __construct() {
            //require_once ('database.php');
            include_once($_SERVER['DOCUMENT_ROOT'].'/taller13/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($nombre,$apellido,$idCurso){
            $sql = 'INSERT INTO estudiantes VALUES (0,:nombre,:apellido,:idCurso)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':idCurso',$idCurso);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($idEstudiante,$nombre,$apellido,$idCurso){
            $sql = 'UPDATE estudiantes SET nombre=:nombre,apellido=:apellido,idCurso=:idCurso WHERE idEstudiantes=:idEstudiantes';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':idCurso',$idCurso); 
            $statement->bindParam(':idEstudiantes',$idEstudiante);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idEstudiante){
            $sql = 'DELETE  FROM estudiantes WHERE idEstudiantes=:idEstudiantes';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idEstudiantes',$idEstudiante);
            return ($statement->execute()) ? true : false;
        }


        public function listar() {

            $sql = 'SELECT e.idEstudiantes,e.nombre,e.apellido,e.idCurso,c.nombre as curso FROM estudiantes e
            JOIN curso c ON e.idCurso = c.idCurso ORDER BY idEstudiantes DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function cargarDesplegable() {

            $sql = 'SELECT idCurso,nombre FROM curso ORDER BY idCurso ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function buscar($idEstudiante) {
            $sql =  'SELECT e.idEstudiantes,e.nombre,e.apellido,e.idCurso,c.nombre as curso FROM estudiantes e
            JOIN curso c ON e.idCurso = c.idCurso WHERE idEstudiantes = :idEstudiantes';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idEstudiantes',$idEstudiante);
            return ($statement->execute()) ? $statement->fetch() : false;                                                       
        }
        
    }
?>