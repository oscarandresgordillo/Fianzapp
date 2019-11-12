
   <section class="content">
        <div class="container-fluid">

            <!-- Material Design Alerts -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">
                                <small style="font-size: 18px">
                                    ¡BIENVENIDO...!
                                </small>
                            </h2>
                        </div>
                        <div class="body">
                                <?php
                                if (isset($_GET['ok'])) {
                                    echo "
                                    <div class='alert alert-info text-center'>
                                    <strong>".$_GET['ok']."</strong>
                                    </div>";
                                }?> 
                            <div>
                                <small style="font-size: 14px">"Gracias por preferirnos". Fianzas De Colombia pensando en nuestros clientes le ofrece este servicio con el fin de que pueda encontrar la información sobre el estado de todos sus procesos judiciales.</small> 
                            </div><br><br>
                             <div class="demo-button">
                                <a href="?c=cliente&a=listar_procesos">
                                <button type="button" class="btn btn-block btn-lg waves-effect" style="background-color: #304873; color: #fff; font-size: 14px"><i class="material-icons">gavel</i>
                                <span>Procesos</span></button></a>
                               <!--  <button type="button" class="btn btn-block btn-lg waves-effect" style="background-color: #80ab4b ; color: #fff; font-size: 14px">Demandados</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Material Design Alerts -->

        </div>
    </section>
