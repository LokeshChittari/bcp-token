

	<!-- Time Col -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-color panel-blue"><!-- Add class "collapsed" to minimize the panel -->
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-line-chart"></i> Current Phase</h3>
					
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
					<div class="text-center">
						<h4 style="font-weight: 500"><b>Get <?=$countdown->result()[0]->bonus_amount?> % bonus  on purchase of token in this phase</b></h4>
						<h4><?=$countdown->result()[0]->title?></h4>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="col-md-3">
								<div class="date_cr">
									<h4 id="days">4</h4>
								</div>
								<h5 class="dy">Days</h5>
							</div>
							<div class="col-md-3">
								<div class="date_cr">
									<h4 id="hours">4</h4>
								</div>
								<h5 class="dy">hours</h5>
							</div>
							<div class="col-md-3">
								<div class="date_cr">
									<h4 id="minutes">4</h4>
								</div>
								<h5 class="dy">minutes</h5>
							</div>
							<div class="col-md-3">
								<div class="date_cr">
									<h4 id="seconds">4</h4>
								</div>
								<h5 class="dy">seconds</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Time Col -->
	<div class="row">
		
		<div class="col-md-8 col-md-offset-2">
            <?php
                if($this->session->flashdata){
                    ?>
                        <div class="alert alert-success">
                        <button type="button" aria-hidden="true" class="close">×</button>
                        <span><?=$this->session->flashdata('flashdata');?></span>
                        </div>
                    <?php
                }
                if(isset($flash))
                {
                    echo $flash;
                }
            ?>
        </div>

		<div class="col-sm-3">
		
			<div class="xe-widget xe-counter-block"  data-count=".num" data-from="0" >
				<div class="xe-upper">
					
					<div class="xe-icon">
						NJC
					</div>
					<div class="xe-label">
						<strong class="num"><?=round(($_SESSION['etp_total_balance']/1000000000000000000),8)?></strong>
						<span>NJC Balance</span>
					</div>
				</div>
				<div class="xe-lower">
					<div class="border"></div>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3">
		
			<div class="xe-widget xe-counter-block xe-counter-block-purple"  data-count=".num" data-from="0" data-to="<?=round(($_SESSION['etp_OrignlEthbal']),8)?>" data-duration="3">
				<div class="xe-upper">
					
					<div class="xe-icon">
						<i class="linecons-camera"></i>
					</div>
					<div class="xe-label">
						<strong class="num">0</strong>
						<span>Ether Balance</span>
					</div>
					
				</div>
				<div class="xe-lower">
					<div class="border"></div>
				</div>
			</div>
			
		</div>
		
		<div class="col-sm-3">
		
			<div class="xe-widget xe-counter-block xe-counter-block-blue" >
				<div class="xe-upper">
					<a href="<?=base_url();?>user/external_transaction">
					<div class="xe-icon">
						<i class="linecons-user"></i>
					</div>
					<div class="xe-label">
						<strong class="num">Send</strong>
						<span>Send</span>
					</div>
				</a>
					
				</div>
				<div class="xe-lower">
					<div class="border"></div>
				</div>
			</div>
			
		</div>
		
		<div class="col-sm-3">
		
			<div class="xe-widget xe-counter-block xe-counter-block-orange">
				<div class="xe-upper">
					<a href="<?=base_url();?>user_address">
					<div class="xe-icon">
						<i class="fa-life-ring"></i>
					</div>
					<div class="xe-label">
						<strong class="num">Receive</strong>
						<span>Receive</span>
					</div>
				</a>
					
				</div>
				<div class="xe-lower">
					<div class="border"></div>
				</div>
			</div>
			
		</div>
		
		<div class="clearfix"></div>
		
	</div>
	<!-- row2 -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-color panel-blue"><!-- Add class "collapsed" to minimize the panel -->
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-code"></i> Referral Code</h3>
					
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
                            <div class="col-md-12 ">
                                <?php
                                $value = base_url('user/signup/').$ref->result()[0]->refferal_code;
                                ?>
                                <div class="form-group label-floating is-empty">
                                    <input type="text" value="<?=$value?>" class="form-control" id="refferal_code" name="token_amount" placeholder="<?=base_url('user/signup/').$ref->result()[0]->refferal_code?>">
                                <span class="material-input"></span></div>
                                <span style="color: #ff9933">Get <?=$countdown->result()[0]->reffral_amount?>% bonus of first purchase of your referrals</span><br/>
                                <a href="<?=base_url('user/see_referral_bonus')?>">See your referral bonus</a>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-info pull-right" value="Copy Referral Code" onclick="myFunction()">
                        <div class="clearfix"></div>
                    </div>

                    <div class="card-content">
                        <div class="row">
                           <div class="col-md-1">
                                <a href="https://twitter.com/intent/tweet?text=<?=$value?>&source=webclient" target="_blank" class="btn btn-info " style="background-color: #55ACEE">
                                     <i class="fa fa-twitter"></i>
                                </a>
                           </div>
                           <div class="col-md-1">
                                <a class="btn btn-primary "  href="https://www.facebook.com/sharer.php?u=<?=$value?>" target="_blank" style="background-color: #3B5998">
                                     <i class="fa fa-facebook"></i>
                                </a>
                           </div>
                           <div class="col-md-1">
                                <a href="https://plus.google.com/share?url=<?=$value?>" target="_blank" class="btn btn-danger " style="background-color: #DD4B39">
                                     <i class="fa fa-google"></i>
                                </a>
                           </div>
                           <div class="col-md-1">
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$value?>&source=LinkedIn" target="_blank" class="btn " style="background-color: #007BB6">
                                     <i class="fa fa-linkedin"></i>
                                </a>
                           </div>
                          
                        </div>
                    </div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- row2 end -->
	<!-- Row 3 -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-color panel-blue"><!-- Add class "collapsed" to minimize the panel -->
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-google"></i> Google Authentication</h3>
					
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
                            <div class="col-md-8 ">
                                <span>Google Authentication enable?</span>
                            </div>
                            <div class="col-md-4">
                              <?php
                              if($ref->result()[0]->google_enable == 1)
                              {
                                ?>
                                 <a href="<?=base_url('user/google_enable')?>" class="btn btn-info pull-right">Disable</a>
                                <?php
                              }
                              else
                              {
                                ?>
                                 <a href="<?=base_url('user')?>" class="btn btn-info pull-right">Enable</a>
                                <?php
                              }
                              ?>
                             </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- Row 3 end -->
	<script>
function myFunction() {
  var copyText = document.getElementById("refferal_code");
  copyText.select();
  document.execCommand("Copy");
}
</script>



  <?php
            if(isset($countdown))
            {
            $end_date = $countdown->result()[0]->end_date;
            $e_date  =  explode('-', $end_date);
            $month = $e_date[1];
            $day = $e_date[2];
            $year = $e_date[0];
            ?>
            
                      
            <script type="text/javascript">
                function makeTimer() {

                        var endTime = new Date("<?=$month?> <?=$day?>, <?=$year?> 12:00:00 PDT");         
                        var endTime = (Date.parse(endTime)) / 1000;

                        var now = new Date();
                        var now = (Date.parse(now) / 1000);

                        var timeLeft = endTime - now;

                        var days = Math.floor(timeLeft / 86400); 
                        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
                        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
                        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

                        if (hours < "10") { hours = "0" + hours; }
                        if (minutes < "10") { minutes = "0" + minutes; }
                        if (seconds < "10") { seconds = "0" + seconds; }

                        $("#days").html(days);
                        $("#hours").html(hours);
                        $("#minutes").html(minutes);
                        $("#seconds").html(seconds);       

                }

                setInterval(function() { makeTimer(); }, 1000);
            </script>
            <?php
            }
            ?>