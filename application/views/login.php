<!DOCTYPE html>
<html lang="en" class="loading">

<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-2/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 10:56:28 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Gabiy | Login Page</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/img/ico/apple-icon-60.html') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/ico/apple-icon-76.html')?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/img/ico/apple-icon-120.html') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/img/ico/apple-icon-152.html') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/ico/favicon.ico') ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/ico/favicon-32.png') ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/feather/style.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/simple-line-icons/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/perfect-scrollbar.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/prism.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/sweetalert2.min.css')?>">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/app.css') ?>">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>
<body data-col="1-column" class=" 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper nav-collapsed menu-collapsed">
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper"><!--Login Page Starts-->
                    <section id="login">
                        <div class="container-fluid">
                            <div class="row full-height-vh">
                                <div class="col-12 d-flex align-items-center justify-content-center">
                                    <div class="card gradient-indigo-purple text-center width-400">
                                        <div class="card-img overlap">
                                            <img alt="element 06" class="mb-1" src="<?php echo base_url('assets/img/portrait/avatars/avatar-08.png') ?>" width="190">
                                        </div>
                                        <div class="card-body">
                                            <div class="card-block">
                                                <h2 class="white">Login</h2>
                                                <form action="<?php echo base_url('login/masuk'); ?>" method="post">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-pink btn-block btn-raised">Login</button>
                                                            <button type="reset" class="btn btn-secondary btn-block btn-raised">Cancel</button>
                                                        </div>
                                                    </div>
                                                        <?php if ($this->session->flashdata('info')): ?>
                                                        <div class="alert alert-danger alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                            <h4><i class="icon fa fa-check"></i>Info</h4>
                                                            Maaf Username dan Password salah!
                                                        </div>
                                                        <?php endif ?>
                                                </form>
                                            </div> 
                                        </div>
                                        <!-- <div class="card-footer">
                                            <div class="float-left"><a (click)="onForgotPassword()" class="white">Recover Password</a></div>
                                            <div class="float-right"><a (click)="onRegister()" class="white">New User?</a></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Login Page Ends-->
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url('assets/vendors/js/core/jquery-3.2.1.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/core/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/perfect-scrollbar.jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/prism.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/jquery.matchHeight-min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/screenfull.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/pace/pace.min.js') ?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url('assets/vendors/js/sweetalert2.min.js')?>" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="<?php echo base_url('assets/js/app-sidebar.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/notification-sidebar.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/customizer.js') ?>" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url('assets/js/sweet-alerts.js')?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    
</body>
<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-2/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 10:56:28 GMT -->
</html>