<div class="wrapper">
    <nav id="sidebar" class="sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.html">
                <span class="align-middle"><img src="<?= base_url(); ?>/assets/fronted/images/LOGO SATGAS.png" width="161px" height="33px"></span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Admin Dashboard
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="<?= base_url('admin'); ?>">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
                    </a>
                    <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('admin/rekap_siswa'); ?>">Rekap Siswa</a></li>
                    </ul>
                </li>
                <li class="sidebar-header">
                    Lainnya
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url('login/logout'); ?>">
                        <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
                    </a>
                </li>
        </div>
    </nav>