<body data-col="2-columns" class=" 2-columns ">
	<!-- ////////////////////////////////////////////////////////////////////////////-->
	<div class="wrapper nav-collapsed menu-collapsed">
		<!-- main menu-->
		<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
		<div data-active-color="white" data-background-color="purple-bliss" data-image="assets/img/sidebar-bg/01.jpg" class="app-sidebar">
			<!-- main menu header-->
			<!-- Sidebar Header starts-->
			<div class="sidebar-header">
				<div class="logo clearfix">
					<a href="index.html" class="logo-text float-left">
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
						<li class="active nav-item">
							<a href="<?php echo site_url('')?>">
								<i class="ft-home"></i>
								<span data-i18n="" class="menu-title">Dashboard</span>
							</a>
						</li>
						<li class=" nav-item">
							<a href="color-palette.html">
								<i class="ft-droplet"></i>
								<span data-i18n="" class="menu-title">Color Palette</span>
							</a>
						</li>
						<li class=" nav-item">
							<a href="inbox.html">
								<i class="ft-mail"></i>
								<span data-i18n="" class="menu-title">Inbox</span>
							</a>
						</li>
						<li class=" nav-item">
							<a href="chat.html">
								<i class="ft-message-square"></i>
								<span data-i18n="" class="menu-title">Chat</span>
							</a>
						</li>
						<li class=" nav-item">
							<a href="taskboard.html">
								<i class="ft-file-text"></i>
								<span data-i18n="" class="menu-title">Task Board</span>
							</a>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-aperture"></i>
								<span data-i18n="" class="menu-title">UI Kit</span>
							</a>
							<ul class="menu-content">
								<li>
									<a href="grids.html" class="menu-item">Grid</a>
								</li>
								<li>
									<a href="typography.html" class="menu-item">Typography</a>
								</li>
								<li>
									<a href="syntax-highlighter.html" class="menu-item">Syntax Highlighter</a>
								</li>
								<li>
									<a href="helper-classes.html" class="menu-item">Helper Classes</a>
								</li>
								<li>
									<a href="text-utilities.html" class="menu-item">Text Utilities</a>
								</li>
								<li class="has-sub">
									<a href="#" class="menu-item">Icons</a>
									<ul class="menu-content">
										<li>
											<a href="feather.html" class="menu-item">Feather Icon</a>
										</li>
										<li>
											<a href="font-awesome.html" class="menu-item">Font Awesome Icon</a>
										</li>
										<li>
											<a href="simple-line.html" class="menu-item">Simple Line Icon</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-box"></i>
								<span data-i18n="" class="menu-title">Components</span>
							</a>
							<ul class="menu-content">
								<li class="has-sub">
									<a href="#" class="menu-item">Bootstrap</a>
									<ul class="menu-content">
										<li>
											<a href="components-lists.html" class="menu-item">List</a>
										</li>
										<li>
											<a href="components-buttons.html" class="menu-item">Buttons</a>
										</li>
										<li>
											<a href="components-alerts.html" class="menu-item">Alerts</a>
										</li>
										<li>
											<a href="components-badges.html" class="menu-item">Badges</a>
										</li>
										<li>
											<a href="components-dropdowns.html" class="menu-item">Dropdowns</a>
										</li>
										<li>
											<a href="components-media-objects.html" class="menu-item">Media Objects</a>
										</li>
										<li>
											<a href="components-pagination.html" class="menu-item">Pagination</a>
										</li>
										<li>
											<a href="components-progress.html" class="menu-item">Progress Bars</a>
										</li>
										<li>
											<a href="components-modals.html" class="menu-item">Modals</a>
										</li>
										<li>
											<a href="components-collapse.html" class="menu-item">Collapse</a>
										</li>
										<li>
											<a href="components-accordion.html" class="menu-item">Accordion</a>
										</li>
										<li>
											<a href="components-carousel.html" class="menu-item">Carousel</a>
										</li>
										<li>
											<a href="components-datepicker.html" class="menu-item">Datepicker</a>
										</li>
										<li>
											<a href="components-popover.html" class="menu-item">Popover</a>
										</li>
										<li>
											<a href="components-tabs.html" class="menu-item">Tabs</a>
										</li>
										<li>
											<a href="components-tooltip.html" class="menu-item">Tooltip</a>
										</li>
									</ul>
								</li>
								<li class="has-sub">
									<a href="#" class="menu-item">Extra</a>
									<ul class="menu-content">
										<li>
											<a href="sweet-alerts.html" class="menu-item">Sweet Alert</a>
										</li>
										<li>
											<a href="toastr.html" class="menu-item">Toastr</a>
										</li>
										<li>
											<a href="nouislider.html" class="menu-item">NoUI Slider</a>
										</li>
										<li>
											<a href="upload.html" class="menu-item">Upload</a>
										</li>
										<li>
											<a href="editor.html" class="menu-item">Editor</a>
										</li>
										<li>
											<a href="dragndrop.html" class="menu-item">Drag and Drop</a>
										</li>
										<li>
											<a href="tour.html" class="menu-item">Tour</a>
										</li>
										<li>
											<a href="image-cropper.html" class="menu-item">Image Cropper</a>
										</li>
										<li>
											<a href="tags-input.html" class="menu-item">Input Tag</a>
										</li>
										<li>
											<a href="switch.html" class="menu-item">Switch</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-edit"></i>
								<span data-i18n="" class="menu-title">Forms</span>
							</a>
							<ul class="menu-content">
								<li class="has-sub">
									<a href="#" class="menu-item">Elements</a>
									<ul class="menu-content">
										<li>
											<a href="inputs.html" class="menu-item">Inputs</a>
										</li>
										<li>
											<a href="input-groups.html" class="menu-item">Input Groups</a>
										</li>
										<li>
											<a href="input-grid.html" class="menu-item">Input Grid</a>
										</li>
									</ul>
								</li>
								<li class="has-sub">
									<a href="#" class="menu-item">Layouts</a>
									<ul class="menu-content">
										<li>
											<a href="basic-forms.html" class="menu-item">Basic Forms</a>
										</li>
										<li>
											<a href="horizontal-forms.html" class="menu-item">Horizontal Forms</a>
										</li>
										<li>
											<a href="hidden-labels.html" class="menu-item">Hidden Labels</a>
										</li>
										<li>
											<a href="form-actions.html" class="menu-item">Form Actions</a>
										</li>
										<li>
											<a href="bordered-forms.html" class="menu-item">Bordered Forms</a>
										</li>
										<li>
											<a href="striped-rows.html" class="menu-item">Striped Rows</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="validation-forms.html" class="menu-item">Validation</a>
								</li>
								<li>
									<a href="wizard-forms.html" class="menu-item">Wizard</a>
								</li>
							</ul>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-grid"></i>
								<span data-i18n="" class="menu-title">Tables</span>
							</a>
							<ul class="menu-content">
								<li>
									<a href="regular-table.html" class="menu-item">Regular</a>
								</li>
								<li>
									<a href="extended-table.html" class="menu-item">Extended</a>
								</li>
							</ul>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-layout"></i>
								<span data-i18n="" class="menu-title">Data Tables</span>
							</a>
							<ul class="menu-content">
								<li>
									<a href="dt-basic-initialization.html" class="menu-item">Basic Initialisation</a>
								</li>
								<li>
									<a href="dt-advanced-initialization.html" class="menu-item">Advanced initialisation</a>
								</li>
								<li>
									<a href="dt-styling.html" class="menu-item">Styling</a>
								</li>
								<li>
									<a href="dt-data-sources.html" class="menu-item">Data Sources</a>
								</li>
								<li>
									<a href="dt-api.html" class="menu-item">API</a>
								</li>
							</ul>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-layers"></i>
								<span data-i18n="" class="menu-title">Cards</span>
							</a>
							<ul class="menu-content">
								<li>
									<a href="basic-cards.html" class="menu-item">Basic Cards</a>
								</li>
								<li>
									<a href="advanced-cards.html" class="menu-item">Advanced Cards</a>
								</li>
							</ul>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-layers"></i>
								<span data-i18n="" class="menu-title">Maps</span>
							</a>
							<ul class="menu-content">
								<li>
									<a href="google-map.html" class="menu-item">Google Map</a>
								</li>
							</ul>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-bar-chart-2"></i>
								<span data-i18n="" class="menu-title">Charts</span>
							</a>
							<ul class="menu-content">
								<li>
									<a href="chartjs.html" class="menu-item">ChartJs</a>
								</li>
								<li>
									<a href="chartist.html" class="menu-item">Chartist</a>
								</li>
							</ul>
						</li>
						<li class=" nav-item">
							<a href="calendar.html">
								<i class="ft-calendar"></i>
								<span data-i18n="" class="menu-title">Calendar</span>
							</a>
						</li>
						<li class="has-sub nav-item">
							<a href="#">
								<i class="ft-copy"></i>
								<span data-i18n="" class="menu-title">Pages</span>
							</a>
							<ul class="menu-content">
								<li>
									<a href="forgot-password-page.html" class="menu-item">Forgot Password</a>
								</li>
								<li>
									<a href="horizontal-timeline-page.html" class="menu-item">Horizontal Timeline</a>
								</li>
								<li>
									<a href="vertical-timeline-page.html" class="menu-item">Vertical Timeline</a>
								</li>
								<li>
									<a href="login-page.html" class="menu-item">Login</a>
								</li>
								<li>
									<a href="register-page.html" class="menu-item">Register</a>
								</li>
								<li>
									<a href="user-profile-page.html" class="menu-item">User Profile</a>
								</li>
								<li>
									<a href="lock-screen-page.html" class="menu-item">Lock Screen</a>
								</li>
								<li>
									<a href="invoice-page.html" class="menu-item">Invoice</a>
								</li>
								<li>
									<a href="error-page.html" class="menu-item">Error</a>
								</li>
								<li>
									<a href="coming-soon-page.html" class="menu-item">Coming Soon</a>
								</li>
								<li>
									<a href="maintenance-page.html" class="menu-item">Maintenance</a>
								</li>
								<li>
									<a href="gallery-page.html" class="menu-item">Gallery</a>
								</li>
							</ul>
						</li>
						<li class=" nav-item">
							<a href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/documentation">
								<i class="ft-book"></i>
								<span data-i18n="" class="menu-title">Documentation</span>
							</a>
						</li>
						<li class=" nav-item">
							<a href="https://pixinvent.ticksy.com/">
								<i class="ft-life-buoy"></i>
								<span data-i18n="" class="menu-title">Support</span>
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
