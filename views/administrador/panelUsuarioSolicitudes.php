
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PANEL DE CLIENTES DEMANDADOS</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="?c=administrador&a=Crear_usuario_solicitud">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">CREAR CLIENTE DEMANDADO</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
            </div>
            <!-- #END# Widgets -->

             <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTADO DE CLIENTES DEMANDADOS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Cédula</th>
                                            <th>Celular</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot >
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Cédula</th>
                                            <th>Celular</th>
                                            <th>Acción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
                                   <?php foreach ($cli_deman as $r): ?>
                                        <tr>
                                        
                                            <td><?php echo $r->id_usuario_solicitud; ?></td>
                                            <td><?php echo $r->nombre_usuario_solicitud; ?></td>
                                            <td><?php echo $r->cedula_usuario_solicitud; ?></td>
                                            <td><?php echo $r->celular_usuario_solicitud; ?></td>
                                            <td>
                                                <div class="icon text-center">
                                                    <a href="?c=administrador&a=Editar_usuario_solicitud&id=<?php echo $r->id_usuario_solicitud;?>"><i class="material-icons" title="Editar">create</i></a>
                                                    <a href="?c=administrador&a=ver_usuario_solicitud&id=<?php echo $r->id_usuario_solicitud;?>"><i class="material-icons" title="Ver">remove_red_eye</i></a>
                                            </div></td>
                                            
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            </div>
    </section>
