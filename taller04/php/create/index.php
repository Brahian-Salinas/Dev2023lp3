<?
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       require_once dirname(__FILE__,3).'/php/config/header.php'; 
    ?>
    <title>creando registro</title>
</head>
<body>
<?php
       require_once dirname(__FILE__,3).'/php/config/menu.php'; 
    ?>
    <div class= "container-md">
        <h2>creando registro</h2>
        <form action="create.php"method="post" id="formcreate ">
            
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" class="form-control" name = "nombre" id="nombre" placeholder="Ingrese Nombre" require autofocus>
        </div>
            <div class="mb-3">
            <label for="apellido" class="form-label">apellido</label>
            <input type="text" class="form-control" name = "apellido" id="apellido" placeholder="Ingrese apellido">
        </div>
        
        <div class="mb-3">
            <label for="telefono" class="form-label"> telefono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Ingrese telefono">
        </div>
        <div class="mb-3">
            <label for="cedula" class="form-label"> cedula</label>
            <input type="number" class="form-control" name="cedula" id="cedula" placeholder="Ingrese cedula">
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
        </form>
    </div>
</body>
    <?php
       require_once dirname(__FILE__,3).'/php/config/header.php';
       
    ?>
</html>