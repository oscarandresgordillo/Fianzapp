<?php
require_once 'models/ingresarCliente.php';

class IngresarClienteController{
    
    private $model;
    
  	public function __CONSTRUCT(){
        $this->model = new IngresarCliente();
    }

    public function Index(){
        require_once 'views/ingresarCliente.php';
    }

    public function Ingresar_usuario(){
        
        $obj = new IngresarCliente();
        
        $obj->usuario = $_REQUEST['usuario'];
        $obj->contrasena =  hash('sha256',$_REQUEST['contrasena']);
        if ($this->model->Ingreso($obj)=="true") {
        	header('Location: indexCliente.php');

        }
        else
        {
        	header('Location: ingresarCliente.php');
        }
    }

    public function Cerrar_sesion(){

        @session_start();
        session_destroy();
        header("Location: ingresarCliente.php");
    }
}