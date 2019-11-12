 
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PROCESOS</h2>
            </div>
   
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        	<form id="form_validation" method="post" action="?c=administrador&a=Guardar_cliente">
                        		
	                            <div class="row clearfix">
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                            <label class="form-label">Número de proceso</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($usu->numero_solicitud)) {echo $usu->numero_solicitud;}?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <label class="form-label">Estado</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($usu->nombre_estado_solicitud)) {echo $usu->nombre_estado_solicitud;}?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <label class="form-label">Fianza</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($usu->numero_fianza)) {echo $usu->numero_fianza;}?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <label class="form-label">Inmobiliaria</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($usu->nombre_cliente)) {echo $usu->nombre_cliente;} ?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <label class="form-label">Demandado</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Celular" name="celular_cliente" value="<?php if(!empty($usu->nombre_usuario_solicitud)) {echo $usu->nombre_usuario_solicitud;} ?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-12">
	                                    <div class="input-group">
	                                        <div class="form-line">
	                                            <label class="form-label">Observaciones</label>
	                                            <textarea name="descripcion" cols="30" rows="5" class="form-control no-resize" disabled><?php if(!empty($usu->descripcion_solicitud)) {echo $usu->descripcion_solicitud;}?></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                                 	
	                            		                            	
	                            	<table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            
                                            <th>Fecha</th>
                                            <th>Observaciones</th>
                                            <th>Archivo</th>
                                            <th>N_solicitud</th>
                                            <th>Estado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot >
                                        <tr>
                                            
                                            <th>Fecha</th>
                                            <th>Observaciones</th>
                                            <th>Archivo</th>
                                            <th>N_solicitud</th>
                                            <th>Estado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
      
                                        <tr>   
                                            <td><?php echo $r->Fecha_creacion; ?></td>
                                            <td><?php echo $r->Observaciones; ?></td>
                                            <td><a href="?c=seguimiento&a=Descargar_seguimiento&file=<?php echo $r->Archivo;?>"><?php echo $r->Archivo; ?></a></td>
                                            <td><?php echo $r->num_solicitud; ?></td>
                                            <td><?php echo $r->estado; ?></td>
                                            <td><div class="icon text-center"><a href="?c=seguimiento&a=Editar_seguimiento&id=<?php echo $r->id_seguimiento_solicitud;?>"><i class="material-icons" title="Editar">create</i></a><a href="?c=seguimiento_sol&a=Ver_seguimiento&id=<?php echo $r->id_seguimiento_solicitud;?>"><i class="material-icons" title="Ver">remove_red_eye</i></a>
                                            </div></td>
                                        </tr>
                                    </tbody>
	                         
	                            <div class="row clearfix">
	                            	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	                            		<button type="button" onclick="window.location.href='?c=administrador&a=index_solicitud'" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #132644; color: #fff;">
	                            			<i class="material-icons">replay</i>
	                            			<span>VOLVER</span>
	                            		</button>
	                            	</div>
	                            </div>
                        	</form>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- #END# Input Group -->
        </div>
    </section>