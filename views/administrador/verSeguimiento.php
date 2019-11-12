
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
                        		<input type="hidden" name="id_usuario_sol" value="<?php echo $sg->id_seguimiento_solicitud; ?>">
	                            <div class="row clearfix">
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                            <label class="form-label">Fecha de creacion</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($sg->Fecha_creacion)) {echo $sg->Fecha_creacion;}?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <label class="form-label">Fecha de modificacion</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($sg->Fecha_modificado)) {echo $sg->Fecha_modificado;}?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <label class="form-label">Observaciones</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($sg->Observaciones)) {echo $sg->Observaciones;}?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <label class="form-label">Archivo</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($sg->Archivo)) {echo $sg->Archivo;} ?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <label class="form-label">Número</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Celular" name="celular_cliente" value="<?php if(!empty($sg->numero_solicitud)) {echo $sg->numero_solicitud;} ?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <label class="form-label">Estado</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Celular" name="celular_cliente" value="<?php if(!empty($sg->estado)) {echo $sg->estado;} ?>" disabled>
	                                        </div>
	                                    </div>
	                                </div> 
	                            </div>
	                            <div class="row clearfix">
	                            	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	                            		<button type="button" onclick="window.location.href='?c=seguimiento_sol&a=index'" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #132644; color: #fff;">
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