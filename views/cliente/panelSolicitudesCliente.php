

   <section class="content">
        <div class="container-fluid">

             <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">
                                <small style="font-size: 18px">
                                    LISTADO DE PROCESOS
                                </small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Número</th>
                                            <th>Estado</th>
                                            <th>Cliente</th>
                                            <th>Observaciones</th>
                                            <th>Archivo</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot >
                                        <tr>
                                            <th>Número</th>
                                            <th>Estado</th>
                                            <th>Cliente</th>
                                            <th>Observaciones</th>
                                            <th>Archivo</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">

                                       
                                        <tr>
                                            <td><?php echo $cli->numero_proceso; ?></td>
                                            <td><?php echo $cli->nombre_estado_solicitud; ?></td>
                                            <td><?php echo $cli->nombre_cliente; ?></td>
                                            <td><?php echo $cli->descripcion; ?></td>
                                            <td><?php echo $cli->archivo_proceso; ?></td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            </div>
        </div>
    </section>






