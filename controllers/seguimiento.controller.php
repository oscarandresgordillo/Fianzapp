<?php
require_once 'models/seguimiento_sol.php'; 

class SeguimientoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Seguimiento();
    }
    
    public function Index(){
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/panelSeguimiento.php';
        require_once 'views/footer.php';
    }

    public function Crear_seguimiento(){
        $hola=$_GET['sol'];
        $usu = new Seguimiento();
        $est = $this->model->Listar_Estado();
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearSeguimiento.php';
        require_once 'views/footer.php';
    }
       
    public function Guardar_seguimiento(){
        $destino="";
        $carpetaDestino="assets/documents/";
        $correo=false;
        $lastid="";
        if(isset($_REQUEST['Observaciones']) && isset($_REQUEST['id_proceso']) && isset($_REQUEST['id_estado_segui'])){
        if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"]){
            if(file_exists($carpetaDestino)||@mkdir($carpetaDestino)){
                    $origen=$_FILES["archivo"]["tmp_name"];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"];
                
                if(@move_uploaded_file($origen,$destino)){
                        echo "<br>".$_FILES["archivo"]["name"]." movido correctamente"; 
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino." o no existe la carpeta";
                }}
        
        $sg= new Seguimiento();
        $fecha = date("d/m/y H:i:s");
        $sg->id_seguimiento_solicitud=$_REQUEST["id_seg_proceso"]; 
        $sg->Observaciones = $_REQUEST['Observaciones'];
        $sg->Archivo = $_FILES["archivo"]["name"];
        $sg->num_solicitud = $_REQUEST['id_proceso'];
        $sg->id_estado_segui= $_REQUEST['id_estado_segui'];
        $sg->fecha  = $fecha;
        //var_dump($sg);
        if($sg->id_seguimiento_solicitud > 0 ){
            $lastid=$this->model->Actualizar_seguimiento($sg);
        }else{
            $lastid=$this->model->Registrar_seguimiento($sg);
        }
        if($lastid){
            $this->EnvioCorreo($sg->id_seguimiento_solicitud);
        }
        header('Location:index.php?c=seguimiento&a=index');
        }else{
            echo "Falta información";
        }
       }

   public function Editar_seguimiento(){

        $sg = new Seguimiento();

        if(isset($_REQUEST['id'])){
            $sg = $this->model->Obtener_seguimiento($_REQUEST['id']);
        }
        
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/crearSeguimiento.php';
        require_once 'views/footer.php';
    }
     public function Ver_seguimiento(){
        $sg = new Seguimiento();

        if(isset($_REQUEST['id'])){
            //$cli = $this->model->Obtener_Seguimiento($_REQUEST['id']);
            $seg = $this->model->Listar_seguimiento_id($_REQUEST['id']);
        }
        require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/ListarSeguimientoID.php';
        require_once 'views/footer.php';
    }

    public function Listar_seguimiento_id(){

         $sg = new Seguimiento();

        if(isset($_REQUEST['id'])){
            $sg = $this->model->Listar_seguimiento_id($_REQUEST['id']);
        }
         require_once 'views/header.php';
        require_once 'views/menu.php';
        require_once 'views/administrador/ListarSeguimientoID.php';
        require_once 'views/footer.php';
    }

    public function Descargar_seguimiento(){
        if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = 'assets/documents/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'The file does not exist.';
    }
}
    }

    public function EnvioCorreo($id){
        $info="";
        if($id>0){
            //Llena para los dos casos la variable info con la información traida.
            //Consulta correo y datos que necesita enviar
        }else{
            //Llena para los dos casos la variable info con la información traida.
            //Consulta el ultimo id registrado y consulta la informacion que deberia de enviar
            echo "No hay info";
        }

        if(isset($info)){
            //Realiza el envio del correo con el servicio smtp de gmail, outloook. y llena las variables de
            //Destinatario, desde que correo, asunto y cuerpo del mes¿nsaje desde la variable info.
        }else{
            echo "No hay info";
        }

    }
}