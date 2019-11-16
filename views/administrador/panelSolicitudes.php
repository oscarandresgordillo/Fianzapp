
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PANEL DE PROCESOS</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="?c=administrador&a=Crear_solicitud">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">create_new_folder</i>
                        </div>
                        <div class="content">
                            <div class="text">CREAR PROCESO</div>
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
                                LISTADO DE PROCESOS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            
                                            <th>Número</th>
                                            <th>Estado</th>
                                            <th>Inmobiliaria</th>
                                            <th>Demandado</th>
                                            <th>Archivos</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot >
                                        <tr>
                                            
                                            <th>Número</th>
                                            <th>Estado</th>
                                            <th>Inmobiliaria</th>
                                            <th>Demandado</th>
                                            <th>Archivos</th>
                                            <th>Acción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">

                                        <?php
                                        include ("controllers/panel.controller.php"); 
                                        foreach($sol as $r):?>
                                        <tr>
                                            
                                            <td><?php echo $r->numero_proceso; ?></td>
                                            <td><?php echo $r->nombre_estado_solicitud; ?></td>
                                            <td><?php echo $r->nombre_cliente; ?></td> 
                                            <td><?php echo $r->nombre_usuario_demandado; ?></td>
                                            <td><a href="?c=administrador&a=Descargar_seguimiento&file=<?php echo $r->archivo_proceso;?>"><?php echo $r->archivo_proceso; ?></a></td> 
                                            <td>
                                            <div  class="icon text-center">
                                                <a href="?c=seguimiento&a=Crear_seguimiento&sol=<?php echo $r->id_proceso;?>">
                                                <i class="material-icons" title="Crear Seguimiento">create_new_folder</i></a>
                                                <a href="?c=seguimiento&a=Ver_seguimiento&id=<?php echo $r->id_proceso;?>">
                                                <i class="material-icons" title="Ver Seguimiento">remove_red_eye</i></a>
                                                                                               
                                            </div>
                                            
                                            <div class="icon text-center">
                                                <a href="?c=administrador&a=Editar_solicitud&id=<?php echo $r->id_proceso;?>">
                                                <i class="material-icons" title="Editar">create</i></a>
                                                <a href="?c=administrador&a=ver_solicitud&id=<?php echo $r->id_proceso;?>">
                                                <i class="material-icons" title="Ver">remove_red_eye</i></a>
                                            </div>
                                        </td>
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
