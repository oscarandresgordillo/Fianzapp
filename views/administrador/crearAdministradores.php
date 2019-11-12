<?php error_reporting(0); ?>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CREAR ADMINISTRADORES</h2>
            </div>
         
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        	<form id="form_validation" method="post" action="?c=administrador&a=Guardar_administrador">
                        		<input type="hidden" name="id_admin" value="<?php echo $adm->id_admin; ?>">
	                            <div class="row clearfix">
	                                <div class="col-md-8">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">account_box</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Nombre adminsitrador" name="nombre_admin" value="<?php if(!empty($adm->nombre_administrador)) {echo $adm->nombre_administrador;} ?>">
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">assignment</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Cédula" name="documento_admin" value="<?php if(!empty($adm->documento_administrador)) {echo $adm->documento_administrador;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">            
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">email</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Correo" name="correo_admin" value="<?php if(!empty($adm->correo_administrador)) {echo $adm->correo_administrador;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">person</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Usuario" name="usuario_admin"  value="<?php if(!empty($adm->usuario_administrador)) {echo $adm->usuario_administrador;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">lock</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="password" class="form-control date" placeholder="Contraseña" name="contrasena_admin">
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
	                            		<button onclick="window.location.href='?c=administrador&a=index'" type="button" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #132644; color: #fff;">
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
