<?php
//completar códiogo
include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
require_once(CONTROLLER_PATH.'matriculaController.php');

$object = new matriculaController();
$idMatricula = $_REQUEST['id'];   
$fecha = $_REQUEST['fecha'];   
$idEstudiante = $_REQUEST['idEstudiante'];   
$idCurso = $_REQUEST['idCurso'];   
$idUsuario = $_REQUEST['idUsuario'];  

$object->update($idMatricula,$fecha,$idEstudiante,$idCurso,$idUsuario);
?>