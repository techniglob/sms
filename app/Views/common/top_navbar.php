<?php $session = session(); ?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
      <a class="navbar-brand brand-logo" href="<?=COMPANY_SHORT_NAME?>"><img src="<?=base_url('assets/backdesk/img/LOGO-FULL.png')?>" alt="logo" style="height:auto" /></a>
      <a class="navbar-brand brand-logo-mini" href="<?=COMPANY_SHORT_NAME?>"><img src="<?=base_url('assets/backdesk/img/LOGO-SMALL.png')?>" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      
      <ul class="navbar-nav navbar-nav-right">
        
        <li class="nav-item d-none d-lg-block full-screen-link">
          <a class="nav-link">
            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
          </a>
        </li>
        
        <!--Notification-->
        <!--<li class="nav-item dropdown">-->
        <!--  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">-->
        <!--    <i class="mdi mdi-bell-outline"></i>-->
        <!--    <span class="count-symbol bg-danger"></span>-->
        <!--  </a>-->
        <!--  <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">-->
        <!--    <h6 class="p-3 mb-0">Notifications</h6>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a class="dropdown-item preview-item">-->
        <!--      <div class="preview-thumbnail">-->
        <!--        <div class="preview-icon bg-success">-->
        <!--          <i class="mdi mdi-calendar"></i>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">-->
        <!--        <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>-->
        <!--        <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>-->
        <!--      </div>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <h6 class="p-3 mb-0 text-center">See all notifications</h6>-->
        <!--  </div>-->
        <!--</li>-->
        
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <p style="margin-top: 7px;" class="font-weight-bold mb-1 text-black"><?= $session->get('username') ?></p> &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp;
            <div class="nav-profile-img">
              <img src="<?=base_url('assets/backdesk/img/user.png')?>" alt="image">
              <span class="availability-status online"></span>
            </div>
            <div class="nav-profile-text"></div>
          </a>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=base_url('logout')?>">
              <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>