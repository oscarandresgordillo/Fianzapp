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

	public function Listar_Seguimiento()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT se.id_seg_proceso, se.fecha_creacion,se.observaciones,se.archivo_seg_proceso,se.id_estado,es.estado FROM seguimiento_proceso as se  
				Join estado_seguimiento as es on es.id_estado_segui = se.id_estado");
			$stm->execute();
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
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT se.fecha_creacion,se.fecha_modificado,se.observaciones,se.archivo_seg_proceso,se.id_estado_segui,es.estado FROM seguimiento_solicitudes as se  
				Join estado_seguimiento as es on es.id_estado_segui = se.id_estado  WHERE se.id_seg_proceso = ?");
			          
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
			$sql = "UPDATE seguimiento_solicitudes SET 
							Fecha_modificado          = ?, 
							Observaciones          = ?, 
							Archivo          = ?, 
							num_solicitud          = ?, 
							id_estado_segui        = ?
					    WHERE id_seguimiento_solicitud = ?";

			$hola=$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Fecha_modificado, 
                        $data->Observaciones, 
                        $data->Archivo,
                        $data->num_solicitud , 
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
		$sql = "INSERT INTO seguimiento_solicitudes (Fecha_creacion,Observaciones,Archivo,num_solicitud,id_estado_segui) 
		        VALUES (?, ?, ?, ?, ?)";

		$hola=$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Fecha_creacion, 
                    $data->Observaciones, 
                    $data->Archivo, 
                    $data->num_solicitud, 
					$data->id_estado_segui
					$data->
                )
			);
			return $hola;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



	
}