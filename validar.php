<?php
require_once 'models/Conexion.php';
session_start();
$id= $_SESSION['id_rol'];
        if ($id == 1) {
        header('Location: index.php');
    }else{
                header('Location: indexCliente.php');
            }
   
    