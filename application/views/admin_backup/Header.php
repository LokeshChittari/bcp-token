<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title><?=$title?></title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/xenon-core.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/xenon-forms.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/xenon-components.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/xenon-skins.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">

    <script src="<?=base_url()?>assets/js/jquery-1.11.1.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body skin-white">
    <div class="page-container">
        <div class="sidebar-menu toggle-others fixed">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <!-- logo -->
                    <div class="logo">
                        <a href="dashboard-1.html" class="logo-expanded">
                            <img src="<?php echo base_url(); ?>assets/images/logo-white-bg.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="user-info-menu">
                            <i class="fa-bell-o"></i>
                            <span class="badge badge-success">7</span>
                        </a>
        
                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>
                </header>
                <ul id="main-menu" class="main-menu">
                   <li class="<?php if($this->uri->segment(2) == 'fees'){echo 'active';}?>">
                        <a href="<?=base_url('admin/fees')?>">
                            <i class="linecons-wallet"></i>
                            <span class="title"> Token Amount</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2) == 'view_user'){echo 'active';}?>">
                        <a href="<?=base_url('admin/view_user')?>">
                            <i class="linecons-user"></i>
                            <span class="title"> View Users</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2) == 'view_eth_address'){echo 'active';}?>"> 
                        <a href="<?=base_url('admin/view_eth_address')?>"><i class="linecons-location"></i>
                            <span class="title"> Eth Addresses</span></a> 
                    </li>
                    <li class="<?php if($this->uri->segment(2) == 'phase'){echo 'active';}?>">
                        <a href="<?=base_url('admin/phase')?>"><i class="linecons-lightbulb"></i> 
                        <span class="title"> Phase</span></a>
                    </li>
                    <li class="<?php if($this->uri->segment(2) == 'minimum_token'){echo 'active';}?>">
                        <a href="<?=base_url('admin/minimum_token')?>"><i class="linecons-lock"></i>
                        <span class="title"> Minimum token purchase</span></a>
                    </li>
                    <li class="<?php if($this->uri->segment(2) == 'withdrawal_permission'){echo 'active';}?>"> <a href="<?=base_url('admin/withdrawal_permission')?>"><i class="linecons-key"></i><span class="title"> Withdrawal Permission</span></a>
                    </li>
                    <li class="<?php if($this->uri->segment(2) == 'admin_address'){echo 'active';}?>">
                        <a href="<?=base_url('admin/admin_address')?>"><i class="linecons-user"></i>Create <span class="title"> Token Holder Admin</span></a>
                    </li>
                      <li class="<?php if($this->uri->segment(2) == 'change_password'){echo 'active';}?>">
                        <a href="<?=base_url('admin/change_password')?>"><i class="linecons-cog"></i> Change <span class="title"> Admin Panel Password</span></a>
                    </li>
                </ul>
            </div>
        </div>
    
        <div class="main-content">
                    
            <nav class="navbar user-info-navbar"  role="navigation">
                <!-- Right links for user info navbar -->
                <ul class="user-info-menu right-links list-inline list-unstyled">
            
                    <li class="dropdown user-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url();?>assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
                            <span>
                                John Smith
                                <i class="fa-angle-down"></i>
                            </span>
                        </a>
            
                        <ul class="dropdown-menu user-profile-menu list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fa-user"></i>
                                    Profile
                                </a>
                            </li>
                           
                            <li class="last">
                                <a href="<?=base_url('admin/logout')?>">
                                    <i class="fa-lock"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
            
                </ul>
            
            </nav>
            
            