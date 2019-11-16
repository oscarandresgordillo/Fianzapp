<?php error_reporting(0); ?>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CREAR SEGUIMIENTO</h2>
            </div>
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        	<form id="form_validation" method="post" action="?c=seguimiento&a=Guardar_seguimiento" enctype="multipart/form-data">
                        		<input type="hidden" name="id_seg_proceso" value="<?php echo $sg->id_seg_proceso; ?>">
								<input type="hidden" name="id_proceso" value="<?php echo $_GET['sol']; ?>">
	                            <div class="row clearfix">	                                             
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">assignment</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <input type="textarea" class="form-control date" placeholder="Observaciones" name="Observaciones" value="<?php if(!empty($sg->observaciones)) {echo $sg->observaciones;} ?>">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">            
	                               
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">person</i>
	                                        </span>
	                                        <div class="form-line">
	                                            <select  class="form-control date" name="id_estado_segui">
												  <option value="<?php echo $sg->id_estado; ?>"><?php {echo $sg->estado;} ?></option> 
												  <?php
	                                    		foreach ($est as $r) {?>
                                                    <option  value="<?php echo $r->id_estado_segui; ?>"><?php echo $r->estado; ?></option>
                                                <?php } ?>
												</select>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="material-icons">look</i>
	                                        </span>
	                                        <div class="form-line">
									                <input type="file" class="form-control date" name="archivo">
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
	                            		<button onclick="window.location.href='?c=seguimiento&a=index'" type="button" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #132644; color: #fff;">
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
