<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
    session_start();
    if (isset($_SESSION["usuario"])) {
        header('location: ./main.php');
    } else {
        header('location: ./view/usuario/login.php');
    }
    require_once(CONTROLLER_PATH.'estudianteController.php');
    $object = new estudianteController();

    $idEstudiante = $_REQUEST['id'];  
    $object->delete($idEstudiante);
    
?>