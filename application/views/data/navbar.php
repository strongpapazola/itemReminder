    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>

            <?php if ( $setPage == 1 ) { ?>
              <a class="navbar-brand" href="<?= base_url('data'); ?>">Dashboard</a>
              <?php } elseif ( $setPage == 2 ) { ?>
              <a class="navbar-brand" href="<?= base_url('finance'); ?>">Finance</a>
              <?php } elseif ( $setPage == 4 ) { ?>
              <a class="navbar-brand" href="<?= base_url('wboard'); ?>">Whiteboard</a>
              <?php } elseif ( $setPage == 5 ) { ?>
              <a class="navbar-brand" href="<?= base_url('hwork'); ?>">HomeWork</a>
            <?php } else {?>
              <a class="navbar-brand" href="<?= base_url('user'); ?>">User Profile</a>
            <?php } ?>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">User Profile</a>
                  <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
