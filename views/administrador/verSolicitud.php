 
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
	                                            <input type="text" class="form-control date" value="<?php if(!empty($usu->numero_proceso)) {echo $usu->numero_proceso;}?>" disabled>
	                                        </div>
	                                    </div>
	                                </div> 
	                                <div class="col-md-6">
	                                    <div class="input-group">
	                                        <label class="form-label">Administrador</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Celular" name="celular_cliente" value="<?php if(!empty($usu->nombre_administrador)) {echo $usu->nombre_administrador;} ?>" disabled>
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
	                                        <label class="form-label">Demandado</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" value="<?php if(!empty($usu->nombre_usuario_demandado)) {echo $usu->nombre_usuario_demandado;}?>" disabled>
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
	                                        <label class="form-label">Archivo</label><br>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Celular" name="celular_cliente" value="<?php if(!empty($usu->archivo_proceso)) {echo $usu->archivo_proceso;} ?>" disabled>
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-12">
	                                    <div class="input-group">
	                                        <div class="form-line">
	                                            <label class="form-label">Observaciones</label>
	                                            <textarea name="descripcion" cols="30" rows="5" class="form-control no-resize" disabled><?php if(!empty($usu->descripcion)) {echo $usu->descripcion;}?></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                             
	                         
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