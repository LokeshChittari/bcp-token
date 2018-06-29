	    <!-- Row 3 -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-color panel-gray"><!-- Add class "collapsed" to minimize the panel -->
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-unlock"></i> Update Password</h3>
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
				<div class="card-content">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="card"> 
								<div class="boxed bg--secondary boxed--lg boxed--border" style="padding: 30px"> 
									<?php
									if(isset($flash)){
										echo $flash;
									}
									?>
									<form method="post" class="form-horizaontal" action="<?=base_url('user/update_password');?>">
										<div class="form-group">
											<label>Old Password:</label>
											<input class="validate-required form-control" type="Password" value="" name="old_pass" placeholder=""required/>
										</div>
										<div class="form-group">
											<label>New Password:</label>
											<input class="validate-required form-control" type="Password" value="" name="new_pass1" placeholder="" required/>
										</div>
										<div class="form-group">
											<label>Confirm Password:</label>
											<input class="validate-required form-control" type="Password" value="" name="new_pass2" placeholder="" required/>
										</div>

										<div class="form-group">
											<input type="submit" name="submit" value="Change Password" class="btn btn-danger btn-sm"/>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

	</div>
</div>
	    <!-- Row 3 end -->