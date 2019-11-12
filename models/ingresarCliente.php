<?php
class IngresarCliente
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
			$stm = $this->pdo->prepare("SELECT * FROM cliente WHERE usuario_cliente = ? AND contrasena_cliente = ?");
			$stm->execute(array($data->usuario, $data->contrasena));
			$count=$stm->rowCount();
			$data=$stm->fetch(PDO::FETCH_OBJ);
			$pdo = null;

			if($count)
			{
				session_start();
				$_SESSION['id_cliente'] = $data->id_cliente;
				$_SESSION['nombre_cliente']=$data->nombre_cliente; 
				$_SESSION['nit_cliente']=$data->nit_cliente; 
				$_SESSION['correo_cliente']=$data->correo_cliente; 
				$_SESSION['usuario_cliente']=$data->usuario_cliente; 
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