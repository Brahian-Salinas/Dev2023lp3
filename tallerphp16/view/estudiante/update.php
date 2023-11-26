<?php 
    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp16/routes.php');
    require_once(CONTROLLER_PATH.'estudianteController.php');
    $object = new estudianteController();

    $idEstudiantes= $_REQUEST['id'];
    $nombre= $_REQUEST['nombre'];
    $apellido= $_REQUEST['apellido'];
    $idCurso= $_REQUEST['idCurso'];
    
    $registro = $object->update($idEstudiantes,$nombre, $apellido,$idCurso);

    header('location: index.php');
?>