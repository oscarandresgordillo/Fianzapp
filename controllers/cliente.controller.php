<?php
require_once 'models/cliente.php';

class ClienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cliente();
    }
    
    public function Listar_procesos(){


        require_once 'views/headerCliente.php';
        require_once 'views/menuCliente.php';
        require_once 'views/cliente/panelSolicitudesCliente.php';
        require_once 'views/footer.php';

    }

  /*  public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_admin']);
        header('Location: index.php?c=administrador&a=index');
    }*/

    public function Crear_solicitud(){

        $usu = new Administrador();

        $cli = $this->model->Listar_clientes();
        $ususol = $this->model->Listar_usuario_solicitud();
        $est = $this->model->Listar_estados();

        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearSolicitudes.php';
        require_once 'views/footer.php';
    }

    public function Ver_solicitud(){

        $cli = new Cliente();

        if(isset($_REQUEST['id'])){
            $cli = $this->model->Obtener_solicitud($_REQUEST['id']);
        }
        require_once 'views/headerCliente.php';
        require_once 'views/menuCliente.php';
        require_once 'views/cliente/verSolicitud.php';
        require_once 'views/footer.php';
    }

    public function Cambiar_clave(){

        require_once 'views/headerCliente.php';
        require_once 'views/menuCliente.php';
        require_once 'views/cliente/clienteP.php';
        require_once 'views/footer.php';
    }

    public function Cambiar_contrasena(){

        $cli = new Cliente();

        session_start();
        $cli->id_usuario = $_SESSION['id_cliente'];
        $cli->contrasena = hash('sha256', $_REQUEST['contrasena_cliente']);
        $cli->contrasena2 = hash('sha256', $_REQUEST['contrasena_cliente2']);

        if ($cli->contrasena==$cli->contrasena2) {

            $this->model->Actualizar_contrasena($cli);
            header('Location: ?c=panelCliente&a=index&ok=La contraseña ha sido cambiada con éxito.');

        }else{
            header('Location: ?c=cliente&a=cambiar_clave&error=Las contraseñas no coinciden, intente de nuevo por favor.');            
        }
    }
}