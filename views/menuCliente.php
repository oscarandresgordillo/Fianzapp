<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenido(a)</div>
                    <div class="email">Sr.(a) <?php echo $_SESSION['nombre_cliente'];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Mi perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="?c=IngresarCliente&a=Cerrar_sesion"><i class="material-icons">close</i>Cerrar sesisión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGACIÓN</li>
                    <li class="active">
                        <a href="?c=panelCliente&a=Index">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a class="menu-toggle">
                            <i class="material-icons">gavel</i>
                            <span>Procesos</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?c=cliente&a=Listar_procesos">
                                    <span>Panel principal</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-toggle">
                            <i class="material-icons">build</i>
                            <span>Ajustes</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?c=cliente&a=cambiar_clave">
                                    <span>Cambiar contraseña</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

