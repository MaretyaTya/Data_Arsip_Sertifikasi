<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="d-flex justify-content-between">
                <!-- <div class="logo">
                        <a href="#"><img src="<?= base_url(); ?>/public/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                    </div> -->
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title"><b>MENU</b></li>

                    <li class="sidebar-item">
                        <a href="<?= base_url(); ?>" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="<?= base_url(); ?>/about" class='sidebar-link'>
                            <i class="bi bi-person-fill"></i>
                            <span>About</span>
                        </a>
                    </li>

                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>