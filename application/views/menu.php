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
					<li class="nav-item mr-2">
						<a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen">
							<i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
							<p class="d-none">fullscreen</p>
						</a>
					</li>
					<!-- <li class="dropdown nav-item">
						<a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
							<i class="ft-flag font-medium-3 blue-grey darken-4"></i>
							<span class="selected-language d-none"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:;" class="dropdown-item py-1">
								<img src="assets/img/flags/us.png" class="langimg" />
								<span> English</span>
							</a>
							<a href="javascript:;" class="dropdown-item py-1">
								<img src="assets/img/flags/es.png" class="langimg" />
								<span> Spanish</span>
							</a>
							<a href="javascript:;" class="dropdown-item py-1">
								<img src="assets/img/flags/br.png" class="langimg" />
								<span> Portuguese</span>
							</a>
							<a href="javascript:;" class="dropdown-item">
								<img src="assets/img/flags/de.png" class="langimg" />
								<span> French</span>
							</a>
						</div>
					</li> -->
					<!-- <li class="dropdown nav-item">
						<a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
							<i class="ft-bell font-medium-3 blue-grey darken-4"></i>
							<span class="notification badge badge-pill badge-danger">4</span>
							<p class="d-none">Notifications</p>
						</a>
						<div class="notification-dropdown dropdown-menu dropdown-menu-right">
							<div class="noti-list">
								<a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4">
									<i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i>
									<span class="noti-wrapper">
										<span class="noti-title line-height-1 d-block text-bold-400 info">New Order Received</span>
										<span class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span>
									</span>
								</a>
								<a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4">
									<i class="ft-bell warning float-left d-block font-large-1 mt-1 mr-2"></i>
									<span class="noti-wrapper">
										<span class="noti-title line-height-1 d-block text-bold-400 warning">New User Registered</span>
										<span class="noti-text">Lorem ipsum dolor sit ametitaque in </span>
									</span>
								</a>
								<a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4">
									<i class="ft-bell danger float-left d-block font-large-1 mt-1 mr-2"></i>
									<span class="noti-wrapper">
										<span class="noti-title line-height-1 d-block text-bold-400 danger">New Order Received</span>
										<span class="noti-text">Lorem ipsum dolor sit ametest?</span>
									</span>
								</a>
								<a class="dropdown-item noti-container py-3">
									<i class="ft-bell success float-left d-block font-large-1 mt-1 mr-2"></i>
									<span class="noti-wrapper">
										<span class="noti-title line-height-1 d-block text-bold-400 success">New User Registered</span>
										<span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span>
									</span>
								</a>
							</div>
							<a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a>
						</div>
					</li> -->
					<li class="dropdown nav-item">
						<a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
							<i class="ft-user font-medium-3 blue-grey darken-4"></i>
							<p class="d-none">User Settings</p>
						</a>
						<div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
							<a href="javascript:;" class="dropdown-item py-1">
								<i class="ft-settings mr-2"></i>
								<span>Settings</span>
							</a>
							<a href="javascript:;" class="dropdown-item py-1">
								<i class="ft-edit mr-2"></i>
								<span>Edit Profile</span>
							</a>
							<!-- <a href="javascript:;" class="dropdown-item py-1">
								<i class="ft-mail mr-2"></i>
								<span>My Inbox</span>
							</a> -->
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">
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

