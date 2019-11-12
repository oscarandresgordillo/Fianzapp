<?php

require_once 'models/cliente.php';

class Cliente
{
	private $pdo;
    
    public $id_admin;
    public $nombre_admin;
    public $documento_admin;
    public $correo_admin;
    public $usuario_admin;
    public $contrasena_admin;
    public $id_cli;
    public $nombre_cli;
    public $nit_cli;
    public $telefono_cli;
    public $direccion_cli;
    public $correo_cli;
    public $usuario_cli;
    public $contrasena_cli;
    public $nombre_usuario_sol;
    public $cedula_usuario_sol;
    public $telefono_usuario_sol;
    public $celular_usuario_sol;
    public $correo_usuario_sol;
    public $id_usuario_sol;
    public $direccion_usuario_sol;
    public $id_sol;
    public $id_cliente_sol;
    public $id_estado_sol;
    public $descripcion_sol;
    public $numero_sol;
    public $id_usuario;
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

	public function Listar_clientes()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM clientes");
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener_cliente($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cliente WHERE id_cliente = ?");
			          
			$stm->execute(array($id));
			$stm->pdo=null;
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar_usuario_solicitud()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios_solicitudes");
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener_usuario_solicitud($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios_solicitudes WHERE id_usuario_solicitud = ?");
			          
			$stm->execute(array($id));
			$stm->pdo=null;
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar_estados()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM estados_solicitudes");
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener_solicitud($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM solicitudes, clientes, estados_solicitudes, usuarios_solicitudes WHERE id_solicitud = ? AND id_cliente_sol=id_cliente AND id_estado_sol=id_estado_solicitud AND id_usuario_sol = id_usuario_solicitud");
			          
			$stm->execute(array($id));
			$stm->pdo=null;
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar_solicitudes()
	{
		try
		{
			$result = array();
			$id_usuario = $_SESSION['id_cliente'];

			$stm = $this->pdo->prepare("SELECT * FROM solicitudes,clientes,usuarios_solicitudes,estados_solicitudes WHERE id_cliente_sol= :id_cliente AND id_cliente_sol = id_cliente AND id_estado_sol = id_estado_solicitud AND id_usuario_sol = id_usuario_solicitud");
			$stm->bindparam(':id_cliente', $id_usuario);
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function contar_clientes()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT count(*) FROM clientes");
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar_contrasena($data)
	{
		try 
		{
			$sql = "UPDATE clientes SET 
							contrasena_cliente = ?

					  WHERE id_cliente= ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

                        $data->contrasena,
                        $data->id_usuario
					)
				);$stm->pdo=null;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}

	}
}