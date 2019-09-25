<?php

require_once 'models/cliente.php';

class PanelClienteController{
    
    private $model;

     public function __CONSTRUCT(){
        $this->model = new Cliente();
    }

    public function Index(){

        //$sol = $this->model->Listar_solicitudes();
        //$clientes = $this->model->contar_clientes();

        require_once 'views/headerCliente.php';
        require_once 'views/menuCliente.php';
        require_once 'views/panelCliente/panelCliente.php';
        require_once 'views/footer.php';
    }
} 