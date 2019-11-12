<?php error_reporting(0); ?>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CREAR USUARIOS DEMANDADOS</h2>
            </div>
         
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        	<form id="form_validation" method="post" action="?c=administrador&a=Guardar_usuario_solicitud">
                        		<input type="hidden" name="id_usuario_sol" value="<?php echo $usu->id_usuario_solicitud; ?>">
	                            <div class="row clearfix">
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">account_box</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Nombre Completo" name="nombre_usuario_deman" value="<?php if(!empty($usu->nombre_usuario_solicitud)) {echo $usu->nombre_usuario_solicitud;} ?>">
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">assignment</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Cédula" name="cedula_usuario_deman" value="<?php if(!empty($usu->cedula_usuario_solicitud)) {echo $usu->cedula_usuario_solicitud;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">phone</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Teléfono" name="telefono_usuario_deman" value="<?php if(!empty($usu->telefono_usuario_solicitud)) {echo $usu->telefono_usuario_solicitud;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">stay_current_portrait</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Celular" name="celular_usuario_deman" value="<?php if(!empty($usu->celular_usuario_solicitud)) {echo $usu->celular_usuario_solicitud;} ?>">
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">email</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Correo" name="correo_usuario_deman" value="<?php if(!empty($usu->correo_usuario_solicitud)) {echo $usu->correo_usuario_solicitud;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">person_pin_circle</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Dirección" name="direccion_usuario_deman" value="<?php if(!empty($usu->direccion_usuario_solicitud)) {echo $usu->direccion_usuario_solicitud;} ?>">
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
	                            		<button type="button" onclick="window.location.href='?c=administrador&a=index_usuario_solicitud'" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #132644; color: #fff;">
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