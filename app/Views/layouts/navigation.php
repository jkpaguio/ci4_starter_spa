<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" @click.prevent="navigate('/')" class="brand-link">
        <img src="<?= base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" x-data="{ activeMenu: window.location.pathname, openMenus: {} }">
                <li class="nav-item">
                    <a href="/" @click.prevent="navigate('/'); activeMenu = '/'" class="nav-link" :class="{ 'active': activeMenu === '/' }">
                        <i class="nav-icon fa fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/about" @click.prevent="navigate('/about'); activeMenu = '/about'" class="nav-link" :class="{ 'active': activeMenu === '/about' }">
                        <i class="nav-icon fa fa-info-circle"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contact" @click.prevent="navigate('/contact'); activeMenu = '/contact'" class="nav-link" :class="{ 'active': activeMenu === '/contact' }">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li class="nav-item" :class="{ 'menu-open': openMenus['starter'] }">
                    <a href="#" class="nav-link" :class="{ 'active': activeMenu.startsWith('/starter') }" @click.prevent="openMenus['starter'] = !openMenus['starter']">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/starter/active" @click.prevent="navigate('/starter/active'); activeMenu = '/starter/active'" class="nav-link" :class="{ 'active': activeMenu === '/starter/active' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/starter/inactive" @click.prevent="navigate('/starter/inactive'); activeMenu = '/starter/inactive'" class="nav-link" :class="{ 'active': activeMenu === '/starter/inactive' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>