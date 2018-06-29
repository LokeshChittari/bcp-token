<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>Fulfill Wallet | Home Page</title>

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

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body horizontal-menu-skin-facebook">
	
	<nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
		
		<div class="navbar-inner">
		
			<!-- Navbar Brand -->
			<div class="navbar-brand">
				<a href="<?=base_url();?>" class="logo">
				Fulfill Wallet
				</a>
				
			</div>
				
			<!-- Mobile Toggles Links -->
			<div class="nav navbar-mobile">
			
				<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
				<div class="mobile-menu-toggle">
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<a href="#" data-toggle="settings-pane" data-animate="true">
						<i class="linecons-cog"></i>
					</a>
					
					<a href="#" data-toggle="user-info-menu-horizontal">
						<i class="fa-bell-o"></i>
						<span class="badge badge-success">7</span>
					</a>
					
					<!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only -->
					<!-- data-toggle="mobile-menu" will show sidebar menu links only -->
					<!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links -->
					<a href="#" data-toggle="mobile-menu-horizontal">
						<i class="fa-bars"></i>
					</a>
				</div>
				
			</div>
			
			<div class="navbar-mobile-clear"></div>
			
			<!-- notifications and other links -->
			<ul class="nav nav-userinfo navbar-right">
		
				<li class="dropdown user-profile">
					<a href="#" data-toggle="dropdown">
						<img src="<?=base_url()?>assets/images/user-1.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
						<span>
							Login / Sign up
							<i class="fa-angle-down"></i>
						</span>
					</a>
					
					<ul class="dropdown-menu user-profile-menu list-unstyled">
						
						<li>
							<a href="<?=base_url('user/login')?>" class="stm-switcher__option">
								<i class="fa-sign-in"></i>
								Login
							</a>
						</li>
						<li class="last">
							<a href="<?=base_url('user/signup')?>" class="stm-switcher__option">
								<i class="fa-lock"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
				
			</ul>
	
		</div>
		
	</nav>
	
	<div class="page-container container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
		
		<div class="main-content">
					
			
			<div class="dx-warning hidden">
				<div>
					<h2>FULFILL COIN</h2>
			
					<p>The first Peer-to-Peer Electronic Cash in Nigeria</p>
					<p>FulfillCoin is the first tokenized currency in Nigeria build on Ethereum blockchain for a secure trading to enable instant payment to anyone in the world. FulfillCoin is a cryptocurrency, Which is built with a focus on privacy.</p>
				</div>
			</div>
			<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					if( ! $.isFunction($.fn.dxChart))
						$(".dx-warning").removeClass('hidden');
				});
			</script>
			<div class="row">
				<div class="col-sm-3">
					
					<div class="xe-widget xe-counter" data-count=".num" data-from="0" data-to="99.9" data-suffix="%" data-duration="2">
						<div class="xe-icon">
							<i class="linecons-cloud"></i>
						</div>
						<div class="xe-label">
							<strong class="num">0.0%</strong>
							<span>Server uptime</span>
						</div>
					</div>
					
					<div class="xe-widget xe-counter xe-counter-purple" data-count=".num" data-from="1" data-to="117" data-suffix="k" data-duration="3" data-easing="false">
						<div class="xe-icon">
							<i class="linecons-user"></i>
						</div>
						<div class="xe-label">
							<strong class="num">1k</strong>
							<span>Users Total</span>
						</div>
					</div>
					
					<div class="xe-widget xe-counter xe-counter-info" data-count=".num" data-from="1000" data-to="2470" data-duration="4" data-easing="true">
						<div class="xe-icon">
							<i class="linecons-camera"></i>
						</div>
						<div class="xe-label">
							<strong class="num">1000</strong>
							<span>New Daily Photos</span>
						</div>
					</div>
					
				</div>
				<div class="col-md-6">
					
					<!-- Colored panel, remember to add "panel-color" before applying the color -->
					<div class="panel panel-color panel-black"><!-- Add class "collapsed" to minimize the panel -->
						<div class="panel-heading">
							<h3 class="panel-title">Current Phase</h3>
							
							<div class="panel-options">
								
								
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								
								<a href="#" data-toggle="reload">
									<i class="fa-rotate-right"></i>
								</a>
								
								
							</div>
						</div>
						
						<div class="panel-body">
							<div class="h3 text-secondary text-bold">Current Phase</div>
							<h5 style="font-weight: 500;text-align: center;">
                              <b>Get <?=$countdown->result()[0]->bonus_amount?>% bonus  on purchase of token in this phase</b></h5>
                              <h3 class="text-center"><?=$countdown->result()[0]->title?></h3>
                              <div class="block-center" style="margin: auto; width: 430px;">
                                 <div class="col-md-3 col-xs-2 text-center" style="width: px;">
                                    <h1 style="font-weight: 800;" id="days"></h1>
                                    <h4 style="margin-top:-7px;padding: 0px;font-weight: 400">Days</h4>
                                 </div>
                                 :
                                 <div class="col-md-3 col-xs-2" style="width: ;">
                                    <h1 style="font-weight: 800;" id="hours"></h1>
                                    <h4 style="margin-top:-7px;padding: 0px;font-weight: 400">hours</h4>
                                 </div>
                                 :
                                 <div class="col-md-3 col-xs-2" style="width: ;">
                                    <h1 style="font-weight: 800;" id="minutes"></h1>
                                    <h4 style="margin-top:-7px;padding: 0px;font-weight: 400">Min</h4>
                                 </div>
                                 <div class="col-md-3 col-xs-2" style="width:;">
                                    <h1 style="font-weight: 800;" id="seconds"></h1>
                                    <h4 style="margin-top:-7px;padding: 0px;font-weight: 400">Sec</h4>
                                 </div>
                              </div><br>
                              <div class="btn-group btn-group-justified">	
                              	<a href="#" target="_self" class="btn btn-blue bg-lg" title="Buy NJC Tokens" >
                                    Buy NJC Tokens </a>				
								</div>
                              
						</div>
						
					</div>
					
				</div>
				<div class="col-sm-3">
					
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<div class="h4 text-purple text-bold"  data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">0.00%</div>
							<span class="text-small text-upper text-muted">Current Server Uptime</span>
						</div>
						<div id="server-uptime-chart" style="height: 134px;"></div>
					</div>
					
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<div class="h4 text-secondary text-bold"  data-count="this" data-from="0.00" data-to="320.45" data-decimal="," data-duration="2">0</div>
							<span class="text-small text-upper text-muted">Avg. of Sales</span>
						</div>
						<div id="sales-avg-chart" style="height: 134px; position: relative;">
							<div style="position: absolute; top: 25px; right: 0; left: 40%; bottom: 0"></div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="xe-widget xe-vertical-counter xe-vertical-counter-white">
						<div class="xe-icon">
							<i class="fa-rocket"></i>
						</div>
						
						<div class="xe-label">
							<span>Faster</span>
							<p><span style="line-height: 22px;">FulfillCoin run on the Ethereum Network, which has significantly faster confirmation time than Bitcoin and other crypto currencies. Your transactions will confirm within minutes.</span></p>
						</div>
					</div>
				</div>
				<!-- 2 -->
				<div class="col-md-4">
					<div class="xe-widget xe-vertical-counter xe-vertical-counter-white">
						<div class="xe-icon">
							<i class="fa-money"></i>
						</div>
						
						<div class="xe-label">
							<span>Cheaper</span>
							<p><span style="line-height: 22px;">Bitcoin's transaction fees often reach several dollars for a single transaction. FulfillCoin's average transaction fee is $0.10 and below, making it more suitable for small payments.</span></p>
						</div>
					</div>
				</div>
				<!-- 3 -->
				<div class="col-md-4">
					<div class="xe-widget xe-vertical-counter xe-vertical-counter-white">
						<div class="xe-icon">
							<i class="fa-slideshare"></i>
						</div>
						
						<div class="xe-label">
							<span>Community-Oriented</span>
							<p><span style="line-height: 22px;">40,000,000 NJC will freely distributed to the community in an airdrop, 10% of FulfillCoin is mapped out for bonus and another 10% for referrals.</span></p><br>
						</div>
					</div>
				</div>
				<!-- 3 ens -->
			</div>
			
		</div>
	
	</div>
	
	<!-- Main Footer -->
	<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
	<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
	<!-- Or class "fixed" to  always fix the footer to the end of page -->
	<footer class="main-footer sticky footer-type-1">
		<div class="footer-inner">
			<!-- Add your copyright text here -->
			<div class="footer-text">
				&copy; 2018
				Powred by <a href="" target="_blank"><strong>Fulfill Wallet</strong></a>
			</div>
			<div class="go-up">
				<a href="#" rel="go-top">
					<i class="fa-angle-up"></i>
				</a>
			</div>
			
		</div>
		
	</footer>
	
	
	<!-- Page Loading Overlay -->
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	



	<!-- Bottom Scripts -->
	<script src="<?=base_url()?>assets/script/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/script/TweenMax.min.js"></script>
	<script src="<?=base_url()?>assets/script/resizeable.js"></script>
	<script src="<?=base_url()?>assets/script/joinable.js"></script>
	<script src="<?=base_url()?>assets/script/xenon-api.js"></script>
	<script src="<?=base_url()?>assets/script/xenon-toggles.js"></script>


	<!-- Imported scripts on this page -->
	<script src="<?=base_url()?>assets/script/xenon-widgets.js"></script>
	<script src="<?=base_url()?>assets/script/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="<?=base_url()?>assets/script/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="<?=base_url()?>assets/script/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="<?=base_url()?>assets/script/xenon-custom.js"></script>

</body>
</html>