<?php error_reporting(0); ?>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CREAR CLIENTES</h2>
            </div>
         
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        	<form id="form_validation" method="post" action="?c=administrador&a=Guardar_cliente" autocomplete="off">
                        		<input type="hidden" name="id_cliente" value="<?php echo $cli->id_cliente; ?>">
	                            <div class="row clearfix">
	                                <div class="col-md-4">
	                                    <label class="form-label">Nombre Cliente/Empresa</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">account_box</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input required type="text" class="form-control date" placeholder="Nombre Cliente/Empresa" name="nombre_cliente" value="<?php if(!empty($cli->nombre_cliente)) {echo $cli->nombre_cliente;} ?>">
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-4">
	                                	<label class="form-label">CC/NIT</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">business</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="CC/NIT" name="nit_cliente" value="<?php if(!empty($cli->nit_cliente)) {echo $cli->nit_cliente;} ?>" required>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                	<label class="form-label">Teléfono</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">phone</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Teléfono" name="telefono_cliente" value="<?php if(!empty($cli->telefono_cliente)) {echo $cli->telefono_cliente;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                                <div class="col-md-4">
	                                	<label class="form-label">Celular</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">stay_current_portrait</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Celular" name="celular_cliente" value="<?php if(!empty($cli->celular_cliente)) {echo $cli->celular_cliente;} ?>">
	                                        </div>
	                                    </div>
	                                </div>             
	                                <div class="col-md-4">
	                                	<label class="form-label">Correo electrónico</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">email</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Correo" name="correo_cliente" value="<?php if(!empty($cli->correo_cliente)) {echo $cli->correo_cliente;} ?>" required>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                	<label class="form-label">Dirección</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">person_pin_circle</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Dirección" name="direccion_cliente" value="<?php if(!empty($cli->direccion_cliente)) {echo $cli->direccion_cliente;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <?php if(!isset($cli->id_cliente)){ ?>
	                            <div class="row clearfix">            
	                                <div class="col-md-4">
	                                	<label class="form-label">Usuario</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">person</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input  autocomplete="off" type="text" class="form-control date" placeholder="Usuario" name="usuario_cliente" value="<?php if(!empty($cli->usuario_cliente)) {echo $cli->usuario_cliente;} ?>" required>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                	<label class="form-label">Contraseña</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">lock</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input autocomplete="off" type="password" class="form-control date" placeholder="Contraseña" name="contrasena_cliente" value="<?php if(!empty($cli->numero_fianza)) echo 'disabled'?>" required>
	                                        </div>
	                                    </div>
	                                </div>
	                            <?php } ?>
	                                <div class="col-md-4">
	                                	<label class="form-label">Número de fianza</label>
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">assignment</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="text" class="form-control date" placeholder="Número de fianza" name="fianza" value="<?php if(!empty($cli->numero_fianza)) {echo $cli->numero_fianza;} ?>" required>
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
	                            		<button type="button" onclick="window.location.href='?c=administrador&a=index_cliente'" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #132644; color: #fff;">
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