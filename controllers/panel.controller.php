<?php

require_once 'models/administrador.php';

class PanelController{
    
    private $model;

     public function __CONSTRUCT(){
        $this->model = new Administrador();
    }

    public function Index(){

        $sol = $this->model->Listar_proceso();
        $clientes = $this->model->contar_cliente();
        

        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/panel/panel.php';
        require_once 'views/footer.php';

    }
} 