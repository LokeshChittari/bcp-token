<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>BCP Wallet</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/xenon-core.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/xenon-forms.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/xenon-components.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/xenon-skins.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/akt.css">
    <script src="<?=base_url()?>assets/script/jquery-1.11.1.min.js"></script>

</head>
<body class="page-body skin-white">
	<div class="settings-pane">
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		<div class="settings-pane-inner">
			<div class="row">
				<div class="col-md-4">
					<div class="user-info">
						<div class="user-image">
							<a href="extra-profile.html">
								<img src="<?=base_url()?>assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- navbar -->
	<div class="page-container">
		<div class="sidebar-menu toggle-others fixed">
			<div class="sidebar-menu-inner">
				<header class="logo-env">
					<!-- logo -->
					<div class="logo">
						<a href="<?=base_url('user/dashboard')?>" class="logo-expanded">
							<img src="<?php echo base_url(); ?>assets/images/BlockCO+.png" alt="" class="img-responsive"/ >
						</a>
					</div>
		
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-ticket"></i>
							<span class="badge badge-success">Select Lang</span>
						</a>
		
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>

					</div>					
				</header>
				<ul id="main-menu" class="main-menu">
					<li class="<?php if($this->uri->segment(2) == 'dashboard'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/update_balance">
							<i class="fa fa-bank"></i>
							<span class="title"><?=lang('REFRESH_BALANCE')?></span>
						</a>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'purchase_token'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/purchase_token">
							<i class="fa fa-ioxhost"></i>
							<span class="title"><?=lang('PURCHASE_FULFILL_COIN')?></span>
						</a>
					</li>
					<!-- <li>
						<h4 style="color: #000; font-size:15px;padding:15px 10px 0px 45px; font-weight: 600">Withdrawal</h4>
					</li> -->
					<li class="<?php if($this->uri->segment(2) == 'transfer_ether'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/transfer_ether">
							<i class="fa fa-slideshare"></i>
							<span class="title"><?=lang('ETHER')?></span>
						</a>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'external_transaction'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/external_transaction">
							<i class="fa fa-recycle"></i>
							<span class="title"><?=lang('FULFILL_COIN')?></span>
						</a>
					</li>
					<div class="logo" style="bottom: 23px;"></div>
					<li class="<?php if($this->uri->segment(1) == 'user_address'){ echo 'active';}?>">
						<a href="<?=base_url('user_address');?>">
							<i class="fa fa-money"></i>
							<span class="title"><?=lang('DEPOSIT')?></span>
						</a>
					</li>
					<li>
                        <a href="https://rinkeby.etherscan.io/address/<?=$_SESSION['etp_Useraddress']?>#tokentxns" target="_blank">
                        	<i class="fa fa-file-pdf-o"></i>
                            <span class="title"><?=lang('TRANSACTION_HISTORY')?></span>
                        </a>
                    </li>
					<li class="<?php if($this->uri->segment(2) == 'user_profile'){ echo 'active';}?><?php if($this->uri->segment(2) == 'change_password'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/user_profile">
							<i class="fa fa-user"></i>
							<span class="title"><?=lang('PROFILE')?></span>
						</a>
					</li>
					<li>
						<a href="<?=base_url();?>user/logout">
							<i class="fa fa-sign-out"></i>
							<span class="title"><?=lang('LOGOUT')?></span>
						</a>
					</li>
				</ul>
				
			</div>
		
		</div>
	<!-- End Nav Bar -->
	<!-- Top Navbar -->
	<div class="main-content">
	<nav class="navbar user-info-navbar"  role="navigation">
		<!-- Left links for user info navbar -->
		<ul class="user-info-menu left-links list-inline list-unstyled">
			<li class="hidden-sm hidden-xs">
				<a href="#" data-toggle="sidebar">
					<i class="fa-bars"></i>
				</a>
			</li>
	
			<!-- Added in v1.2 -->
			
		</ul>
		<?php  // load language file
     if ($this->session->userdata('lang')){
         $lang = $this->session->userdata('lang');
     }else{
         $lang = 'english';
     }
     ?>
		<div class = "col-md-3 pull-right" style="margin-top: 20px;">
		<form action="<?php echo base_url();?>user/changeLang" method="post" id="language_select">
			<select name="lang" id="lang" class="form-control"  onchange="changeLang()">
			<option value='english' <?php if($lang == 'english') echo "selected"; ?>>English</option>
			<option value='japanese' <?php if($lang == 'japanese') echo "selected"; ?>>Japanese</option>
			</select>
			</form>
		</div>
	</nav>

	<script>
	function changeLang(){
		$("#language_select").submit()
	}
	</script>