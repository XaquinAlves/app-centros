<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="<?php echo $_ENV['host.folder'] ?>" class="nav-link
                <?php echo $seccion === $_ENV['host.folder'] . 'inicio' ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Inicio
                </p>
            </a>
        </li>
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item
          <?php echo (in_array($seccion, [
                $_ENV['host.folder'] . 'panel/temas',
                $_ENV['host.folder'] . 'panel/usuario'
        ])) ? 'menu-open' :
                ''; ?>">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Panel de control
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo $_ENV['host.folder'] ?>panel/temas" class="nav-link
                <?php echo $seccion === $_ENV['host.folder'] . 'panel/temas' ? 'active' : ''; ?>">
                        <i class="fas fa-paint-brush nav-icon"></i>
                        <p>Temas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_ENV['host.folder'] ?>panel/usuario" class="nav-link
                    <?php echo $seccion === $_ENV['host.folder'] . 'panel/usuario' ? 'active' : ''; ?>">
                        <i class="fas fa-user nav-icon"></i>
                        <p>Cuenta</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->