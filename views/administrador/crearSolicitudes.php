
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CREAR/EDITAR PROCESO</h2>
            </div>
         
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        	<form id="form_validation" method="post" action="?c=administrador&a=Guardar_solicitud">
                        		<input type="hidden" name="id_solicitud" value="<?php if(!empty($sol->id_solicitud)){echo $sol->id_solicitud;} ?>">
	                            <div class="row clearfix">
	                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                        <label class="form-label">Número de solicitud</label>
	                                        <div class="form-line">
	                                            <input type="number" class="form-control date" style="font-size: 20px" name="numero_solicitud" value="<?php if(!empty($sol->numero_solicitud)) {echo $sol->numero_solicitud;}?>">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                    	<label class="form-label">Estado</label>
	                                    	<select name="id_estado_sol" class="form-control selectpicker" data-live-search="true" required>
	                                    		<?php 
	                                    		foreach ($est as $r) {?>
	                                    			<option value="<?php echo $r->id_estado_solicitud; ?>"><?php echo $r->nombre_estado_solicitud; ?></option>
	                                    		<?php } ?>
	                                    	</select>
	                                    </div>
	                                </div>
	                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
	                                    <div class="input-group disabled">
	                                    	<label class="form-label">Estado actual</label><br>
	                                    	<input class="col-md-12 text-center" value="<?php if(!empty($sol->nombre_estado_solicitud)) {echo $sol->nombre_estado_solicitud;}?>" class="text-center" disabled></input>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                    	<label class="form-label">Inmobiliaria</label>
	                                    	<select class="form-control show-tick" data-live-search="true"  name="id_cliente">
	                                    		<option value="<?php if(!empty($ususol->id_usuario_solicitud)){echo $ususol->id_usuario_solicitud;}  ?>"><?php if(!empty($sol->nombre_cliente)) {echo $sol->nombre_cliente;}?>
	                                    		</option>
	                                    		<?php
	                                    		foreach ($cli as $r) {?>
                                                    <option value="<?php echo $r->id_cliente; ?>"><?php echo $r->nombre_cliente; ?></option>
                                                <?php } ?>
	                                    	</select>
	                                    </div>
	                                </div>              
	                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                    	<label class="form-label">Demandado</label>
	                                    	<select class="form-control show-tick" data-live-search="true"  name="id_usuario_sol">
	                                    		<option value="<?php if(!empty($ususol->id_usuario_solicitud)){echo $ususol->id_usuario_solicitud;} ?>"><?php if(!empty($sol->nombre_usuario_solicitud)) {echo $sol->nombre_usuario_solicitud;}?>
	                                    		</option>
	                                    		<?php
	                                    		foreach ($ususol as $r) {?>
                                                    <option value="<?php if(!empty($r->id_usuario_solicitud)){echo $r->id_usuario_solicitud;} $r->id_usuario_solicitud; ?>"><?php echo $r->nombre_usuario_solicitud; ?></option>
                                                <?php } ?>
	                                    	</select>
	                                    </div>
	                                </div>                  
	                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                        <div class="form-line">
	                                            <label class="form-label">Observaciones</label>
	                                            <textarea name="descripcion" cols="30" rows="5" class="form-control no-resize" required><?php if(!empty($sol->descripcion_solicitud)) {echo $sol->descripcion_solicitud;}?></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                            	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	                            		<button type="submit" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #7DB941; color: #fff;">
	                            			<i class="material-icons">send</i>
	                            			<span>ENVIAR</span>
	                            		</button>
	                            	</div>
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
