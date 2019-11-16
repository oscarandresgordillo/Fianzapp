<?php
class Ingresar
{
	private $pdo;
    
    public $usuario;
    public $contrasena;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conexion();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Ingreso($data)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM administrador WHERE usuario_administrador = ? AND contrasena_administrador = ?");
			$stm->execute(array($data->usuario, $data->contrasena));
			$count=$stm->rowCount();
			$data=$stm->fetch(PDO::FETCH_OBJ);
			$pdo = null;

			if($count)
			{
				session_start();
				$_SESSION['id_admin'] = $data->id_admin;
				$_SESSION['nombre_administrador']=$data->nombre_administrador; 
				$_SESSION['documento_administrador']=$data->documento_administrador; 
				$_SESSION['correo_administrador']=$data->correo_administrador; 
				$_SESSION['usuario_administrador']=$data->usuario_administrador; 
				$_SESSION['id_rol']=$data->id_rol; 
				return $true="true";
				
			}
			else
			{
				return $false="false";
			} 

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}