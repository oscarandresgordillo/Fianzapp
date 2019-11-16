<?php error_reporting(0); ?>
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
                        		<input type="hidden" name="id_solicitud" value="<?php echo $sol->id_proceso; ?>">
	                            <div class="row clearfix">
	                            	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                    	<label class="form-label">Administrador</label>
	                                    	<select required class="form-control show-tick" data-live-search="true"  name="id_admin">
	                                    		<option value="<?php echo $sol->id_admin; ?>"><?php if(!empty($sol->nombre_administrador)) {echo $sol->nombre_administrador;}?>
	                                    		</option>
	                                    		<?php
	                                    		foreach ($adm as $r) {?>
                                                    <option value="<?php echo $r->id_admin; ?>"><?php echo $r->nombre_administrador; ?></option>
                                                <?php } ?>
	                                    	</select>
	                                    </div>
	                                </div> 
	                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                        <label class="form-label">Número de solicitud</label>
	                                        <div class="form-line">
	                                            <input required type="number" class="form-control date" style="font-size: 20px" name="numero_solicitud" value="<?php if(!empty($sol->numero_proceso)) {echo $sol->numero_proceso;}?>">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                    	<label class="form-label">Estado</label>
	                                    	<select required name="id_estado_sol" class="form-control selectpicker" data-live-search="true" required>

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
	                                    	<select required class="form-control show-tick" data-live-search="true"  name="id_cliente">
	                                    		<option value="<?php echo $sol->id_usuario_proceso; ?>"><?php if(!empty($sol->nombre_cliente)) {echo $sol->nombre_cliente;}?>
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
	                                    	<select required class="form-control show-tick" data-live-search="true"  name="id_usuario_sol">
	                                    		<option value="<?php echo $sol->id_usuario_demandado; ?>"><?php if(!empty($sol->nombre_usuario_demandado)) {echo $sol->nombre_usuario_demandado;}?>
	                                    		</option>
	                                    		<?php
	                                    		foreach ($ususol as $r) {?>
                                                    <option value="<?php echo $r->id_usuario_demandado; ?>"><?php echo $r->nombre_usuario_demandado; ?></option>
                                                <?php } ?>
	                                    	</select>
	                                    </div>
	                                </div> 
	                                <center><div class="input-group" >
	                                        <div class="form-line">
	                                            <label class="form-label">Adjuntar Archivos</label>
	                                            <input type="file" class="form-control date" name="archivo"
	                                            value="<?php if(!empty($sol->numero_proceso)) {echo $sol->Archivo;}?>">
	                                        </div>
	                                    </div>
	                               </center>
	                                                 
	                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                                    <div class="input-group">
	                                        <div class="form-line">
	                                            <label class="form-label">Observaciones</label>
	                                            <textarea name="descripcion" cols="30" rows="5" class="form-control no-resize" required><?php if(!empty($sol->descripcion)) {echo $sol->descripcion;}?></textarea>
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
