<body data-col="2-columns" class=" 2-columns " onload="startTime()">
  <div class="wrapper nav-collapsed menu-collapsed">
    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="primary" data-image="<?php echo base_url('assets/img/sidebar-bg/01.jpg')?>" class="app-sidebar">
      <!-- main menu header-->
      <!-- Sidebar Header starts-->
      <div class="sidebar-header">
        <div class="logo clearfix">
          <a href="<?php echo site_url('admin/home')?>" class="logo-text float-left">
            <div class="logo-img">
              <img src="<?php echo base_url('assets/img/logo.png')?>" />
            </div>
            <span class="text align-middle">Gabiy</span>
          </a>
          <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
            <i data-toggle="collapsed" class="ft-toggle-left toggle-icon"></i>
          </a>
          <a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none">
            <i class="ft-x"></i>
          </a>
        </div>
      </div>
      <!-- Sidebar Header Ends-->
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="sidebar-content">
        <div class="nav-container">
          <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class="nav-item <?php if($this->uri->segment(2)=="home"){echo 'active';}?>">
              <a href="<?php echo site_url('admin/home')?>">
                <i class="ft-home"></i>
                <span data-i18n="" class="menu-title">Home</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(2)=="customer"){echo 'active';}?>">
              <a href="<?php echo site_url('admin/customers')?>">
                <i class="ft-users"></i>
                <span data-i18n="" class="menu-title">Customers</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(2)=="customer_device"){echo 'active';}?>">
              <a href="<?php echo site_url('admin/customer_device')?>">
                <i class="ft-monitor"></i>
                <span data-i18n="" class="menu-title">Customer Device</span>
              </a>
            </li>
          </ul>
        </div>
      </div> 
      <!-- main menu content-->
      <div class="sidebar-background"></div>
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->


    <!-- Navbar (Header) Starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <form role="search" class="navbar-form navbar-right mt-1">
            <div class="position-relative has-icon-right">
              <input type="text" placeholder="Search" class="form-control round" />
              <div class="form-control-position">
                <i class="ft-search"></i>
              </div>
            </div>
          </form>
        </div>
        <div class="navbar-container">
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item mr-2 mt-1">
                <h4 align="center">Hello, <?php echo $username;?>!</h4>
              </li>
              <li class="nav-item">
                <a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen">
                  <i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                  <p class="d-none">fullscreen</p>
                </a>
              </li>
              <li class="dropdown nav-item">
                <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                  <i class="ft-user font-medium-3 blue-grey darken-4"></i>
                  <p class="d-none">User Settings</p>
                </a>
                <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                  <a href="javascript:;" class="dropdown-item py-1">
                    <i class="ft-edit mr-2"></i>
                    <span>Edit Profile</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <!-- <button type="button" class="btn btn-info btn-sm" onclick="window.location='<?php echo base_url("login/keluar");?>'">Logout</button> -->
                  <a href="<?php echo base_url('login/keluar')?>" class="dropdown-item">
                    <i class="ft-power mr-2"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle">
                  <i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
                  <p class="d-none">Notifications Sidebar</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar (Header) Ends-->