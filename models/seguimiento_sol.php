<?php

require_once 'models/seguimiento_sol.php';

class Seguimiento
{
	private $pdo;
    
    public $id_segui;
    public $fecha_inicio;
    public $fecha_modificado;
    public $Observaciones;
    public $archivo;
    public $id_sol;
    public $id_estado;
   


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
public function Listar_Estado()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM estado_seguimiento");
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		
		{
			die($e->getMessage());
		}
	}
	public function Listar_Seguimiento()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT se.id_seg_proceso, se.fecha_creacion,se.fecha_modificado,se.observaciones,se.archivo_seg_proceso,p.numero_proceso ,es.estado FROM seguimiento_proceso as se  
				Join estado_seguimiento as es on es.id_estado_segui = se.id_estado join proceso as p on p.id_proceso = se.id_proceso");
			$stm->execute();
			$stm->pdo=null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		
		{
			die($e->getMessage());
		}
	}

	public function Listar_seguimiento_id($id)
	{
		try
		{
			

	$stm = $this->pdo->prepare("SELECT se.id_seg_proceso, se.fecha_creacion,se.observaciones,se.archivo_seg_proceso,p.numero_proceso ,es.estado 
								FROM seguimiento_proceso as se  
								Join estado_seguimiento as es on es.id_estado_segui = se.id_estado join proceso as p on p.id_proceso = se.id_proceso
								where se.id_proceso = ?");
			
			$stm->execute(array($id));
			$stm->pdo=null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		
		{
			die($e->getMessage());
		}
	}

	public function Obtener_Seguimiento($id)
	{
		try {
		
			$stm = $this->pdo->prepare("SELECT se.id_seg_proceso, se.fecha_creacion,se.observaciones,se.archivo_seg_proceso,se.id_estado,p.numero_proceso ,es.estado 
								FROM seguimiento_proceso as se  
								Join estado_seguimiento as es on es.id_estado_segui = se.id_estado join proceso as p on p.id_proceso = se.id_proceso
								where se.id_proceso = ?");
			          
			$stm->execute(array($id));
			$stm->pdo=null;
			return $stm->fetch(PDO::FETCH_OBJ);
		
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar_seguimiento($data)
	{
		try 
		{
			$sql = "UPDATE seguimiento_proceso SET 
							fecha_modificado          = ?, 
							observaciones          = ?, 
							archivo_seg_proceso         = ?, 
							id_estado          = ? 
					    WHERE id_seg_proceso = ?";

			$hola=$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->fecha, 
	                    $data->Observaciones, 
	                    $data->Archivo, 
	                    $data->id_estado_segui,
                        $data->id_seguimiento_solicitud
					)
				);
			    return $hola;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar_seguimiento($data)
	{
		try 
		{
		$sql = "INSERT INTO seguimiento_proceso (fecha_creacion,observaciones,archivo_seg_proceso,id_estado,id_proceso) 
		        VALUES ( ?, ?, ?, ?, ?)";

		$hola=$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->fecha, 
                    $data->Observaciones, 
                    $data->Archivo, 
                    $data->id_estado_segui,
                    $data->num_solicitud 
					
                )
			);
			return $hola;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



	
}