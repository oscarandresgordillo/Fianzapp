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

	public function Listar()  //Lista lso registros de la tabla administrador, es decir los asesores de la plataforma
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM administrador");
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
			          ->prepare("SELECT * FROM administrador WHERE id_admin = ?");
			          
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
	public function Actualizar($data)  //Actualiza informacion de administradores de la plataforma
	{
		try 
		{
			$sql = "UPDATE administrador SET 
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
		$sql = "INSERT INTO administrador (nombre_administrador,documento_administrador,correo_administrador,usuario_administrador,contrasena_administrador) 
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

			$stm = $this->pdo->prepare("SELECT * FROM cliente");
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
	public function Actualizar_clientes($data)
	{
		try 
		{
			$sql = "UPDATE cliente SET 
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
		$sql = "INSERT INTO cliente (nombre_cliente,nit_cliente,telefono_cliente,celular_cliente,direccion_cliente,correo_cliente,usuario_cliente,contrasena_cliente,numero_fianza) 
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

			$stm = $this->pdo->prepare("SELECT * FROM demandado");
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
			          ->prepare("SELECT * FROM demandado WHERE id_usuario_demandado = ?");
			          
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
			$sql = "UPDATE demandado SET 
							nombre_cliente          = ?, 
							cedula_cliente         = ?, 
							telefono_cliente         = ?, 
							celular_cliente          = ?, 
							correo_cliente         = ?,
							direccion_cliente          = ?
					    WHERE id_usuario_demandado = ?";

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
		$sql = "INSERT INTO demandado (nombre_cliente,cedula_cliente,telefono_cliente,celular_cliente,correo_cliente,direccion_cliente) 
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

	public function Listar_estado()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM estado_proceso");
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
		$sql = "INSERT INTO proceso (numero_proceso,id_cliente,id_estado,id_usuario_demandado,descripcion,archivo_proceso) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$hola=$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->numero_sol,
                    $data->id_cliente_sol, 
                    $data->id_estado_sol, 
                    $data->id_usuario_sol, 
                    $data->descripcion_sol,
                    $data->Archivo
                )

			);$stm->pdo=null;
		     return $hola;
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
			          ->prepare("SELECT * FROM proceso, cliente, estado_proceso, demandado WHERE numero_solicitud = ? ");
			          
			$stm->execute(array($id));
			$stm->pdo=null;
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function Obtener_seguimiento($id)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM seguimiento_proceso 
			          WHERE id_proceso  = ? ");
			          
			

				$stm->execute(array($id));
			    $stm->pdo=null;
			    return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar_proceso()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM proceso p,cliente c,demandado d,estado_proceso ep WHERE p.id_cliente = c.id_cliente AND p.id_estado = ep.id_estado_solicitud AND p.id_demandado = d.id_usuario_demandado");
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
			$sql = "UPDATE proceso SET 
							id_estado         = ?, 
							descripcion          = ?
					    WHERE id_proceso = ?";

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

	

	public function contar_cliente()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT count(*) FROM cliente");
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