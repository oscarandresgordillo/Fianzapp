<?php
require_once 'models/administrador.php';

class AdministradorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Administrador();
    }
    
    public function Index(){
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/panelAdministradores.php';
        require_once 'views/footer.php';
    }

    public function Crear_administrador(){
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearAdministradores.php';
        require_once 'views/footer.php';
    }
       
    public function Guardar_administrador(){
        $adm = new Administrador();
        
        $adm->id_admin = $_REQUEST['id_admin'];
        $adm->nombre_admin = $_REQUEST['nombre_admin'];
        $adm->documento_admin = $_REQUEST['documento_admin'];
        $adm->correo_admin = $_REQUEST['correo_admin'];
        $adm->usuario_admin = $_REQUEST['usuario_admin'];
        $adm->contrasena_admin = hash('sha256', $_REQUEST['contrasena_admin']); 

        $adm->id_admin > 0 
            ? $this->model->Actualizar($adm)
            : $this->model->Registrar($adm);
            
        header('Location:index.php?c=administrador&a=index');
    }

   public function Editar_administrador(){

        $adm = new Administrador();

        if(isset($_REQUEST['id'])){
            $adm = $this->model->Obtener_admin($_REQUEST['id']);
        }
        
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearAdministradores.php';
        require_once 'views/footer.php';
    }

  /*  public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_admin']);
        header('Location: index.php?c=administrador&a=index');
    }*/

    public function Index_cliente(){
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/panelClientes.php';
        require_once 'views/footer.php';
    }

    public function Crear_cliente(){
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearClientes.php';
        require_once 'views/footer.php';
    }

    public function Guardar_cliente(){
        $cli = new Administrador();
        
        $cli->id_cliente = $_REQUEST['id_cliente'];
        $cli->nombre_cli = $_REQUEST['nombre_cliente'];
        $cli->nit_cli = $_REQUEST['nit_cliente'];
        $cli->telefono_cli = $_REQUEST['telefono_cliente'];
        $cli->celular_cli = $_REQUEST['celular_cliente'];
        $cli->direccion_cli = $_REQUEST['direccion_cliente'];
        $cli->correo_cli = $_REQUEST['correo_cliente'];
        $cli->usuario_cli = $_REQUEST['usuario_cliente'];
        $cli->contrasena_cli = hash('sha256', $_REQUEST['contrasena_cliente']);
        $cli->num_fianza = $_REQUEST['fianza'];

        $cli->id_cliente > 0 
            ? $this->model->Actualizar_cliente($cli)
            : $this->model->Registrar_cliente($cli);
            
        header('Location:index.php?c=administrador&a=index_cliente');
    }

    /*public function Cli_Demandados(){
        $cli_deman = new Administrador();

        $cli_deman= $this->model->Listar_usuario_solicitud();
        var_dump($cli_deman);
        return $cli_deman;
        
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/panelUsuarioSolicitudes.php';
        require_once 'views/footer.php';
            

    }*/

   public function Editar_cliente(){

        $cli = new Administrador();

        if(isset($_REQUEST['id'])){
            $cli = $this->model->Obtener_cliente($_REQUEST['id']);
        }
        
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearClientes.php';
        require_once 'views/footer.php';
    }

    public function Ver_cliente(){

        $cli = new Administrador();

        if(isset($_REQUEST['id'])){
            $cli = $this->model->Obtener_cliente($_REQUEST['id']);
        }
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/verCliente.php';
        require_once 'views/footer.php';
    }

    public function Index_usuario_solicitud(){
        $cli_deman = new Administrador();

        $cli_deman= $this->model->Listar_usuario_solicitud();
    
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/panelUsuarioSolicitudes.php';
        require_once 'views/footer.php';
    }

    public function Crear_usuario_solicitud(){

        $cli = $this->model->Listar_clientes();
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearUsuarioSolicitudes.php';
        require_once 'views/footer.php';
    }

    public function Guardar_usuario_solicitud(){
        $usu = new Administrador();
        
        $usu->id_usuario_sol = $_REQUEST['id_usuario_sol'];
        $usu->nombre_usuario_sol = $_REQUEST['nombre_usuario_deman'];
        $usu->cedula_usuario_sol = $_REQUEST['cedula_usuario_deman'];
        $usu->telefono_usuario_sol = $_REQUEST['telefono_usuario_deman'];
        $usu->celular_usuario_sol = $_REQUEST['celular_usuario_deman'];
        $usu->correo_usuario_sol = $_REQUEST['correo_usuario_deman'];
        $usu->direccion_usuario_sol = $_REQUEST['direccion_usuario_deman'];

        $usu->id_usuario_sol > 0 
            ? $this->model->Actualizar_usuario_solicitud($usu)
            : $this->model->Registrar_usuario_solicitud($usu);
            
        header('Location:index.php?c=administrador&a=Index_usuario_solicitud');
    }

   public function Editar_usuario_solicitud(){

        $usu = new Administrador();

        if(isset($_REQUEST['id'])){
            $usu = $this->model->Obtener_usuario_solicitud($_REQUEST['id']);
        }
        
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearUsuarioSolicitudes.php';
        require_once 'views/footer.php';
    }

    public function Ver_usuario_solicitud(){

        $usu = new Administrador();

        if(isset($_REQUEST['id'])){
            $usu = $this->model->Obtener_usuario_solicitud($_REQUEST['id']);
        }
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/verUsuarioSolicitudes.php';
        require_once 'views/footer.php';
    }

    public function Index_solicitud(){

        $sol = $this->model->Listar_solicitudes();
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/panelSolicitudes.php';
        require_once 'views/footer.php';
    }

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

    public function Guardar_solicitud(){

        $usu = new Administrador();
        
        $usu->id_sol = $_REQUEST['id_solicitud'];
        $usu->numero_sol = $_REQUEST['numero_solicitud'];
        $usu->id_cliente_sol = $_REQUEST['id_cliente'];
        $usu->id_estado_sol = $_REQUEST['id_estado_sol'];
        $usu->id_usuario_sol = $_REQUEST['id_usuario_sol'];
        $usu->descripcion_sol = $_REQUEST['descripcion'];

        $usu->id_sol > 0 
            ? $this->model->Actualizar_solicitud($usu)
            : $this->model->Registrar_solicitud($usu);
            
        header('Location:index.php?c=administrador&a=Index_solicitud');
    }

     public function Editar_solicitud(){
        
        $usu = new Administrador();
        
        if(isset($_REQUEST['id'])){

            //$cli = $this->model->Listar_clientes();
            //$ususol = $this->model->Listar_usuario_solicitud();
            $est = $this->model->Listar_estados();
            $sol = $this->model->Obtener_solicitud($_REQUEST['id']);

        }
        
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearSolicitudes.php';
        require_once 'views/footer.php';
    }

    public function Ver_solicitud(){

        $usu = new Administrador();

        if(isset($_REQUEST['id'])){
            $usu = $this->model->Obtener_solicitud($_REQUEST['id']);
        }
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/verSolicitud.php';
        require_once 'views/footer.php';
    }
}