<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/dashboard"><i class="menu-icon fa fa-laptop"></i>Inicio</a>
                    </li>
                    <li class="menu-title">Modulos</li><!-- /.menu-title -->
                    @can('user.dashboard')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-badge"></i><a href="/usuarios">Listar Usuarios</a></li>
                            <li><i class="fa fa-bars"></i><a href="/usuarios/create">Crear Usuario</a></li>
                        </ul>
                    </li>
                    @endcan

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Facturas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file-word-o"></i><a href="/facturas">Listar Facturas</a></li>
                            @can('user.dashboard')
                            <li><i class="fa fa-bars"></i><a href="/facturas/create">Crear Factura</a></li>
                            @endcan
                        </ul>
                    </li>

                    @can('user.dashboard')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Prendas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="/prendas">Listar Prendas</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="/prendas/create">Crear Prenda</a></li>
                        </ul>
                    </li>
                    @endcan

                    @can('user.dashboard')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Detalle</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="/detalles">Listar Detalles</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="/detalles/create">Crear Detalles</a></li>
                        </ul>
                    </li>
                    @endcan

                    @can('user.dashboard')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Pagos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="/pagos">Listar Pagos</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="/pagos/create">Crear Pagos</a></li>
                        </ul>
                    </li>
                    @endcan

                    <li class="menu-title">Extras</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
