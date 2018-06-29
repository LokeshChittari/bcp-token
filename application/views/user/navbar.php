<div class="page-container">
		
		<div class="sidebar-menu toggle-others fixed">
		
			<div class="sidebar-menu-inner">
				
				<header class="logo-env">
		
					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>
		
						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
		
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
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
					<li class="<?php if($this->uri->segment(2) == 'dashboard'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/update_balance">
							<i class="fa fa-bank"></i>
							<span class="title">Refresh balance</span>
						</a>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'purchase_token'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/purchase_token">
							<i class="fa fa-ioxhost"></i>
							<span class="title">Purchase Fulfill Coin</span>
						</a>
					</li>
					<li>
						<h4 style="color: #f5f5f5; font-size:14px;padding-left: 30px;">Withdrawal</h4>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'transfer_ether'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/transfer_ether">
							<i class="fa fa-slideshare"></i>
							<span class="title">Ether</span>
						</a>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'external_transaction'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/external_transaction">
							<i class="fa fa-recycle"></i>
							<span class="title">Fulfill Coin</span>
						</a>
					</li>
					<div class="logo" style="bottom: 23px;"></div>
					<li class="<?php if($this->uri->segment(1) == 'user_address'){ echo 'active';}?>">
						<a href="<?=base_url('user_address');?>">
							<i class="fa fa-money"></i>
							<span class="title">Deposit</span>
						</a>
					</li>
					<li class="<?php if($this->uri->segment(1) == 'user_address'){ echo 'active';}?>">
                        <a href="https://rinkeby.etherscan.io/address/<?=$_SESSION['etp_Useraddress']?>#tokentxns" target="_blank">
                        	<i class="fa fa-file-pdf-o"></i>
                            <span class="title">Transaction History</span>
                        </a>
                    </li>
					<li class="<?php if($this->uri->segment(2) == 'user_profile'){ echo 'active';}?><?php if($this->uri->segment(2) == 'change_password'){ echo 'active';}?>">
						<a href="<?=base_url();?>user/user_profile">
							<i class="fa fa-user"></i>
							<span class="title">Profile</span>
						</a>
					</li>
					<li>
						<a href="<?=base_url();?>user/logout">
							<i class="fa fa-sign-out"></i>
							<span class="title">Logout</span>
						</a>
					</li>
				</ul>
				
			</div>
		
		</div>