  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="<?= base_url('data'); ?>" class="simple-text logo-mini">
          <div class="logo-image-small" style="border-radius: 50%;">
            <img src="<?= base_url('assetsmaster/'); ?>img/logo-small.png">
          </div>
        </a>
        <a href="<?= base_url('data'); ?>" class="simple-text logo-normal">
          Dashboard
          <!-- <div class="logo-image-big">
            <img src="<?= base_url('assetsmaster/'); ?>img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php if ( $setPage == 1 ) { echo 'active'; } ?>">
            <a href="<?= base_url('data'); ?>">
              <i class="nc-icon nc-paper"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?php if ( $setPage == 2 ) { echo 'active'; } ?>">
            <a href="<?= base_url('finance'); ?>">
              <i class="nc-icon nc-bank"></i>
              <p>Finance</p>
            </a>
          </li>
          <li class="<?php if ( $setPage == 4 ) { echo 'active'; } ?>">
            <a href="<?= base_url('wboard'); ?>">
              <i class="nc-icon nc-align-left-2"></i>
              <p>Whiteboard</p>
            </a>
          </li>
          <li class="<?php if ( $setPage == 5 ) { echo 'active'; } ?>">
            <a href="<?= base_url('hwork'); ?>">
              <i class="nc-icon nc-align-left-2"></i>
              <p>HomeWork</p>
            </a>
          </li>
          <li class="<?php if ( $setPage == 3 ) { echo 'active'; } ?>">
            <a href="<?= base_url('user'); ?>">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="<?= base_url('auth/logout'); ?>">
              <i class="nc-icon nc-user-run"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
