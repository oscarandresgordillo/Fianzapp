
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PANEL DE CLIENTES</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="?c=administrador&a=crear_cliente">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">CREAR CLIENTE</div>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
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
                                LISTADO DE CLIENTES
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Correo</th>
                                            <th>Usuario</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot >
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Correo</th>
                                            <th>Usuario</th>
                                            <th>Acción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
                                        <?php foreach($this->model->Listar_clientes() as $r): ?>
                                        <tr>
                                            <td><?php echo $r->id_cliente; ?></td>
                                            <td><?php echo $r->nombre_cliente; ?></td>
                                            <td><?php echo $r->telefono_cliente; ?></td>
                                            <td><?php echo $r->correo_cliente; ?></td>
                                            <td><?php echo $r->usuario_cliente; ?></td>
                                            <td><div class="icon text-center"><a href="?c=administrador&a=Editar_cliente&id=<?php echo $r->id_cliente;?>"><i class="material-icons" title="Ver o editar">create</i></a><a href="?c=administrador&a=ver_cliente&id=<?php echo $r->id_cliente;?>"><i class="material-icons" title="Ver o editar">remove_red_eye</i></a>
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
