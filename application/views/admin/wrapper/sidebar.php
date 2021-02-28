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
                    <a class="sidebar-link" href="index.html">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="pages-profile.html">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="pages-settings.html">
                        <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
                    </a>
                    <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
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