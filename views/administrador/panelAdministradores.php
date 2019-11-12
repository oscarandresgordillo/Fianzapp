
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PANEL ADMINISTRADORES</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="?c=administrador&a=crear_administrador">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">CREAR ADMINISTRADOR</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div></a>
            </div>
            <!-- #END# Widgets -->

             <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTADO DE ADMINISTRADOR
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            
                                            <th>Nombre</th>
                                            <th>Documento</th>
                                            <th>Correo</th>
                                            <th>Usuario</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot >
                                        <tr>
                                            
                                            <th>Nombre</th>
                                            <th>Documento</th>
                                            <th>Correo</th>
                                            <th>Usuario</th>
                                            <th>Acción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
                                        <?php foreach($this->model->Listar() as $r): ?>
                                        <tr>
                                            <td><?php echo $r->nombre_administrador; ?></td>
                                            <td><?php echo $r->documento_administrador; ?></td>
                                            <td><?php echo $r->correo_administrador; ?></td>
                                            <td><?php echo $r->usuario_administrador; ?></td>
                                            <td><div class="icon text-center"><a href="?c=administrador&a=Editar_administrador&id=<?php echo $r->id_admin;?>"><i class="material-icons" title="Ver o editar">create</i></a>
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
