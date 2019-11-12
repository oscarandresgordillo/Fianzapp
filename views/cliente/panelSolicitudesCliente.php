

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
                                            <th>ID</th>
                                            <th>Número</th>
                                            <th>Estado</th>
                                            <th>Demandado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot >
                                        <tr>
                                            <th>ID</th>
                                            <th>Número</th>
                                            <th>Estado</th>
                                            <th>Demandado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
                                        <?php foreach($this->model->Listar_solicitudes() as $r):?>
                                        <tr>
                                            <td><?php echo $r->id_solicitud; ?></td>
                                            <td><?php echo $r->numero_solicitud; ?></td>
                                            <td><?php echo $r->nombre_estado_solicitud; ?></td>
                                            <td><?php echo $r->nombre_usuario_solicitud; ?></td>
                                            <td><div class="icon text-center"><!-- <a href="?c=cliente&a=Editar_solicitud&id=<?php echo $r->id_solicitud;?>"><i class="material-icons" title="Editar">create</i> --></a><a href="?c=cliente&a=ver_solicitud&id=<?php echo $r->id_solicitud;?>"><i class="material-icons" title="Ver">remove_red_eye</i></a>
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
        </div>
    </section>






