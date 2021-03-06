<script src="<?=base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>

    <!-- Row 3 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-color panel-red">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-retweet"></i> <?=lang('TRANSFER_ETHER')?></h3>
                    
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
                                <?php
                                if($this->session->flashdata('flashdata')){
                                ?>
                                <div class="col s12 m2">
                                      <div class="alert alert-success">
                                        <button type="button" aria-hidden="true" class="close">×</button>
                                        <span>
                                        <?php
                                            echo $this->session->flashdata('flashdata');
                                        ?>
                                            
                                        </span>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            <div class="card">
                                <div class="card-content">
                                   <?php
                                   if(isset($_SESSION['user_ether_balance']))
                                   {
                                    ?>
                                   <p style="text-align: center;">Your ETH Balance :- <?= $_SESSION['user_ether_balance'];?></p>
                                   <?php
                                    }
                                    ?>
                                    <form method="post" action="<?=base_url('user/transfer_ether')?>">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" class="form-control" id="__tkn_amt__" name="to_add">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fee</label>
                                                    <input type="text" class="form-control" name="fee" value="0.001" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><?=lang('PASSWORD')?></label>
                                                    <input type="password" class="form-control" name="eth_password" placeholder="********">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-red pull-right" value="Send Amount">
                                        <div class="clearfix"></div>
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
    <script>
    $(document).ready(function(){
        $("#__tkn_amt__").on("keyup",function(){
           var token_amount = $(this).val();
           eth_charge = 0.001;
           var total_eth_charges = token_amount*eth_charge;
           $("#eth_charge").val(parseFloat(total_eth_charges));
        });
    });
    
</script>