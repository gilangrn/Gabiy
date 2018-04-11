<body data-col="2-columns" class=" 2-columns " onload="startTime()">
	<div class="wrapper nav-collapsed menu-collapsed">
		<!-- main menu-->
		<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
		<div data-active-color="white" data-background-color="purple-bliss" data-image="assets/img/sidebar-bg/01.jpg" class="app-sidebar">
			<!-- main menu header-->
			<!-- Sidebar Header starts-->
			<div class="sidebar-header">
				<div class="logo clearfix">
					<a href="<?php echo site_url('dashboard')?>" class="logo-text float-left">
						<div class="logo-img">
							<img src="assets/img/logo.png" />
						</div>
						<span class="text align-middle">APEX</span>
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
						<li class="nav-item <?php if($this->uri->segment(1)=="dashboard"){echo 'active';}?>">
							<a href="<?php echo site_url('dashboard')?>">
								<i class="ft-home"></i>
								<span data-i18n="" class="menu-title">Dashboard</span>
							</a>
						</li>
						<li class="nav-item <?php if($this->uri->segment(1)=="customers"){echo 'active';}?>">
							<a href="<?php echo site_url('customers')?>">
								<i class="ft-users"></i>
								<span data-i18n="" class="menu-title">Customers</span>
							</a>
						</li>
						<li class="nav-item <?php if($this->uri->segment(1)=="customerdevice"){echo 'active';}?>">
							<a href="<?php echo site_url('customerdevice')?>">
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