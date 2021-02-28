    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <div class="main">
                <div class="logo"><a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/fronted/images/LOGO SATGAS.png" width="171px" height="43px"></a></div>
                <div class="menu_text">
                    <ul>
                        <div class="togle_">
                            <div class="menu_main">
                                <ul>
                                    <li><a href="<?= base_url('login'); ?>">Login</a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="<?= base_url(); ?>">Home</a>
                                <a href="<?= base_url('home/dftr_scr'); ?>">Daftar Screening</a>
                                <a href="#">About</a>
                                <a href="#">Doctors</a>
                                <a href="#">News</a>
                                <a href="<?= base_url('login'); ?>">Login</a>
                            </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="<?= base_url(); ?>/assets/fronted/images/toogle-icon.png" class="toggle_menu"></span>
                        <span onclick="openNav()"><img src="<?= base_url(); ?>/assets/fronted/images/toogle-icon1.png" class="toggle_menu_1"></span>
                    </ul>
                </div>
            </div>
        </div>