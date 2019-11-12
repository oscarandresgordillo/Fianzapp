
<section class="content">
	<div class="container-fluid">

		<!-- Input Group -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 class="text-center">
							<small style="font-size: 18px">
								CAMBIAR CONTRASEÑA
							</small>
						</h2>
					</div>
					<div class="body">
						<?php
						if (isset($_GET['error'])) {
							echo "<div class='card-content'>
							<div class='alert alert-danger text-center' role='alert'>
							<strong>".$_GET['error']."</strong>
							</div>
							</div>";

						}?>
						<form id="form_validation" method="post" action="?c=cliente&a=Cambiar_contrasena">
							<input type="hidden" name="id_usuario" value="<?php echo $cli->id_usuario; ?>">
							<div class="row clearfix">
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock</i>
										</span>
										<div class="form-line">
											<input type="password" class="form-control date" placeholder="Contraseña" name="contrasena_cliente">
										</div>
									</div>
								</div>             
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock</i>
										</span>
										<div class="form-line">
											<input type="password" class="form-control date" placeholder="Nueva contraseña" name="contrasena_cliente2">
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<button type="submit" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #7DB941; color: #fff;">
										<i class="material-icons">send</i>
										<span>ENVIAR</span>
									</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<button onclick="window.location.href='?c=panelCliente&a=Index'" type="button" class="btn btn-block waves-effect" style="border-radius: 10px; font-size: 16px; background-color: #132644; color: #fff;">
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
