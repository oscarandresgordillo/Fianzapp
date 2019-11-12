<?php
require_once 'models/ingresar.php';

class IngresarController{
    
    private $model;
    
  	public function __CONSTRUCT(){
        $this->model = new Ingresar();
    }

    public function Index(){
        require_once 'views/ingresar.php';
    }

    public function Ingresar_usuario(){
        $obj = new Ingresar();
        
        $obj->usuario = $_REQUEST['usuario'];
        $obj->contrasena = $_REQUEST['contrasena']; /*hash('sha256',$_REQUEST['contrasena']);*/
        if ($this->model->Ingreso($obj)=="true") {
        	header('Location: index.php');

        }
        else
        {
        	header('Location: ingresar.php?men=mal');
        }
    }

    public function Cerrar_sesion(){

        @session_start();
        session_destroy();
        header("Location: ingresar.php");
    }
}