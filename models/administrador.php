<?php

require_once 'models/administrador.php';

class Administrador
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
    public $num_fianza;


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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM administradores");
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener_admin($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM administradores WHERE id_admin = ?");
			          
			$stm->execute(array($id));
			$stm->pdo=null;
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
/*
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM administrador WHERE id_admin = ?");			          

			$stm->execute(array($id));
			$stm->pdo=null;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
*/
	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE administradores SET 
							nombre_administrador          = ?, 
							documento_administrador          = ?, 
							correo_administrador          = ?, 
							usuario_administrador          = ?, 
							contrasena_administrador        = ?
					    WHERE id_admin = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre_admin, 
                        $data->documento_admin, 
                        $data->correo_admin,
                        $data->usuario_admin, 
                        $data->contrasena_admin,
                        $data->id_admin
					)
				);
			     $stm->pdo=null;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO administradores (nombre_administrador,documento_administrador,correo_administrador,usuario_administrador,contrasena_administrador) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre_admin, 
                    $data->documento_admin, 
                    $data->correo_admin, 
                    $data->usuario_admin, 
                    $data->contrasena_admin
                )
			);$stm->pdo=null;
		} catch (Exception $e) 
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
			          ->prepare("SELECT * FROM clientes WHERE id_cliente = ?");
			          
			$stm->execute(array($id));
			$stm->pdo=null;
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
/*
	public function Eliminar_cliente($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM administrador WHERE id_admin = ?");			          

			$stm->execute(array($id));
			$stm->pdo=null;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
*/
	public function Actualizar_cliente($data)
	{
		try 
		{
			$sql = "UPDATE clientes SET 
							nombre_cliente          = ?, 
							nit_cliente          = ?, 
							telefono_cliente          = ?, 
							celular_cliente          = ?, 
							direccion_cliente          = ?, 
							correo_cliente          = ?, 
							usuario_cliente          = ?
					    WHERE id_cliente = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre_cli, 
                        $data->nit_cli, 
                        $data->telefono_cli, 
                        $data->celular_cli, 
                        $data->direccion_cli, 
                        $data->correo_cli, 
                        $data->usuario_cli,
                        $data->id_cliente
					)
				);
			     $stm->pdo=null;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar_cliente($data)
	{
		try 
		{
		$sql = "INSERT INTO clientes (nombre_cliente,nit_cliente,telefono_cliente,celular_cliente,direccion_cliente,correo_cliente,usuario_cliente,contrasena_cliente,numero_fianza) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre_cli, 
                    $data->nit_cli, 
                    $data->telefono_cli, 
                    $data->celular_cli, 
                    $data->direccion_cli, 
                    $data->correo_cli, 
                    $data->usuario_cli, 
                    $data->contrasena_cli,
                    $data->num_fianza
                )
			);$stm->pdo=null;
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
/*
	public function Eliminar_cliente($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM administrador WHERE id_admin = ?");			          

			$stm->execute(array($id));
			$stm->pdo=null;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
*/
	public function Actualizar_usuario_solicitud($data)
	{
		try 
		{
			$sql = "UPDATE usuarios_solicitudes SET 
							nombre_usuario_solicitud          = ?, 
							cedula_usuario_solicitud          = ?, 
							telefono_usuario_solicitud          = ?, 
							celular_usuario_solicitud          = ?, 
							correo_usuario_solicitud          = ?,
							direccion_usuario_solicitud          = ?
					    WHERE id_usuario_solicitud = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre_usuario_sol, 
                        $data->cedula_usuario_sol, 
                        $data->telefono_usuario_sol, 
                        $data->celular_usuario_sol, 
                        $data->correo_usuario_sol,
                        $data->direccion_usuario_sol,
                        $data->id_usuario_sol
					)
				);
			     $stm->pdo=null;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar_usuario_solicitud($data)
	{
		try 
		{
		$sql = "INSERT INTO usuarios_solicitudes (nombre_usuario_solicitud,cedula_usuario_solicitud,telefono_usuario_solicitud,celular_usuario_solicitud,correo_usuario_solicitud,direccion_usuario_solicitud) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre_usuario_sol, 
                    $data->cedula_usuario_sol, 
                    $data->telefono_usuario_sol, 
                    $data->celular_usuario_sol, 
                    $data->correo_usuario_sol,
                    $data->direccion_usuario_sol
                )
			);$stm->pdo=null;
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

	public function Registrar_solicitud($data)
	{
		try 
		{
		$sql = "INSERT INTO solicitudes (numero_solicitud,id_cliente_sol,id_estado_sol,id_usuario_sol,descripcion_solicitud) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->numero_sol,
                    $data->id_cliente_sol, 
                    $data->id_estado_sol, 
                    $data->id_usuario_sol, 
                    $data->descripcion_sol
                )
			);$stm->pdo=null;
		} catch (Exception $e) 
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

			$stm = $this->pdo->prepare("SELECT * FROM solicitudes,clientes,usuarios_solicitudes,estados_solicitudes WHERE id_cliente_sol = id_cliente AND id_estado_sol = id_estado_solicitud AND id_usuario_sol = id_usuario_solicitud");
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar_solicitud($data)
	{
		try 
		{
			$sql = "UPDATE solicitudes SET 
							id_estado_sol          = ?, 
							descripcion_solicitud          = ?
					    WHERE id_solicitud = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_estado_sol, 
                        $data->descripcion_sol,
                        $data->id_sol
					)
				);
			     $stm->pdo=null;
		} catch (Exception $e) 
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
}