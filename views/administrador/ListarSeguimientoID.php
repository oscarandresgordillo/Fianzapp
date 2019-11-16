 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PANEL DE SEGUIMIENTO DE PROCESO</h2>
            </div>
              <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="?c=administrador&a=index_solicitud">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">replay</i>
                        </div>
                        <div class="content">
                            <div class="text">VOLVER A PROCESOS</div>
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
                                LISTADO DE SEGUIMIENTO DE PROCESOS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            
                                            <th>Fecha</th>
                                            <th>Observaciones</th>
                                            <th>Archivo</th>
                                            <th>N_solicitud</th>
                                            <th>Estado</th>
                                            <!--<th>Acción</th>-->
                                        </tr>
                                    </thead>
                                    <tfoot >
                                        <tr>
                                            
                                            <th>Fecha</th>
                                            <th>Observaciones</th>
                                            <th>Archivo</th>
                                            <th>N_solicitud</th>
                                            <th>Estado</th>
                                            <!--<th>Acción</th>-->
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
                                        <?php 

                                    
                                    

                                        foreach($seg as $r): ?>
                                        <tr>
                                            <td><?php echo $r->fecha_creacion; ?></td> 
                                            <td><?php echo $r->observaciones; ?></td>
                                            <td><a href="?c=seguimiento&a=Descargar_seguimiento&file=<?php echo $r->archivo_seg_proceso;?>"><?php echo $r->archivo_seg_proceso; ?></a></td>
                                            <td><?php echo $r->numero_proceso; ?></td>
                                            <td><?php echo $r->estado; ?></td>
                                           <!-- <td><div class="icon text-center"><a href="?c=seguimiento&a=Editar_seguimiento&id=<?php //echo $r->id_seguimiento_solicitud;?>"><i class="material-icons" title="Editar">create</i></a><a href="?c=seguimiento_sol&a=Ver_seguimiento&id=<?php //echo $r->id_seguimiento_solicitud;?>"><i class="material-icons" title="Ver">remove_red_eye</i></a>
                                            </div></td>-->
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
