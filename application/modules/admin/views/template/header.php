<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIDASKOL</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('files');?>\assets\images\favicon.ico" >
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\bower_components\bootstrap\css\bootstrap.min.css">
     <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\assets\icon\font-awesome\css\font-awesome.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\assets\icon\feather\css\feather.css">
    
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <!-- notify js Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\bower_components\pnotify\css\pnotify.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\bower_components\pnotify\css\pnotify.brighttheme.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\bower_components\pnotify\css\pnotify.buttons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\bower_components\pnotify\css\pnotify.history.css">   
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\assets\pages\pnotify\notify.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('files');?>\assets\css\jquery.mCustomScrollbar.css">

    <!-- jquery -->
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('files');?>\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <!-- data-table js -->
    <script src="<?= base_url('files');?>\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="<?= base_url('files');?>\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('files');?>\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <script src="<?= base_url('files');?>\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>

    <style>
     td,th{
        padding: 4px !important;
        font-size: 12px !important;
        }
        .sortable-item {
          /*padding: 10px;*/
          /*margin: 5px;*/
          /*background: #eee;*/
          /*border: 1px solid #ccc;*/
          cursor: pointer;
          /*border-radius: 3px;*/
        }
        .selected {
          background: #d3d3d3;
        }
        .dragging {
          background: #aaa;
        }
        .chosen {
          background: #f0f0f0;
        }

        /*form*/
        .form-group{
             /*font-size: 10px !important;*/
             margin-bottom: 3px !important;
             
        }
        label{
           
        }
        .form-control{
            height: 25px !important;
            padding: 1px;

        }

    </style>
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo bg-light">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu text-dark"></i>
                        </a>
                        <a href="#">
                            <img class="img-fluid" src="<?= base_url('files');?>\assets\images\sidaskol.png" alt="Theme-Logo" >
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">

                        </ul>
                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url('files');?>\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>