<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('admin/product-list') ?>">Product List</a>
                        <a class="nav-link" href="<?= base_url('admin/product-category') ?>">Product Category</a>
                    </nav>
                </div>
                <a class="nav-link" href="<?= base_url('admin/slider') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                    Slider
                </a>
                <a class="nav-link" href="<?= base_url('admin/team') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                    Team
                </a>
                <a class="nav-link" href="<?= base_url('admin/account') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Account
                </a>
                <a class="nav-link" href="<?= base_url('logout') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                    Logout
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>