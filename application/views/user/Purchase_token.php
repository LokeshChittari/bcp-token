<script src="<?=base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>

    <!-- Row 3 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-color panel-red">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-cc-mastercard"></i> <?=lang('PURCHASE_TOKEN');?></h3>
                    
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
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                <?php 
                                if($this->session->flashdata('flashdata'))
                                {
                                    ?>
                                <div class="col s12 m2">
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">×</button>
                                        <span><?=$this->session->flashdata('flashdata')?></span>
                                    </div>
                                </div>
                                <?php
                               }
                               ?>
                            <div class="card">
                                <div class="card-content">
                                    <form method="post" action="<?=base_url('user/purchase_token')?>">
                                        <div class="row">
                                            <div class="col-md-12 ">

                                                <p style="text-align: center;"><?=lang('MINIMUM_TOKEN_PURCHASE');?> :- <?=$min_token?></p>
                                                <p style="text-align: center;"><?=lang('YOUR_ETH_BALANCE');?> :- <?= $_SESSION['user_ether_balance'];?></p>
                                                <p style="text-align: center;">1 <?=lang('TOKEN');?>  = <?=$token_value?> Ethereum</p>
                                                 <p style="text-align: center;"><?=lang('BONUS_AMOUNT');?>:-<?=$countdown->result()[0]->bonus_amount?>%</p>
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><?=lang('TOKEN');?></label>
                                                    <input type="text" class="form-control" id="__tkn_amt__" name="token_amount" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <input type="text" class="form-control" id="bonus_amout" value="" disabled="disabled" placeholder="<?=lang('BONUS_AMOUNT')?>">
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <input type="text" class="form-control" id="eth_charge" name="eth_charge" value="" placeholder="<?=lang('CHARGES_IN_ETHER')?>" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><?=lang('FEE')?></label>
                                                    <input type="text" class="form-control" name="<?=lang('FEE')?>" value="0.001" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><?=lang('PASSWORD')?></label>
                                                    <input type="password" class="form-control" name="password" placeholder="********">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-red pull-right" value="<?=lang('SEND_AMOUNT')?>">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
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
           eth_charge = <?=$token_value?>;
           var total_eth_charges = token_amount*eth_charge;
           var total_bonus = token_amount * <?=$countdown->result()[0]->bonus_amount?> * 1/100;
           var total_token_amt = parseFloat(token_amount) +parseFloat(total_bonus);
           $("#bonus_amout").val(token_amount + '+' + parseFloat(total_bonus) + ' (Bonus Amount) ='+total_token_amt);
           $("#eth_charge").val(parseFloat(total_eth_charges));
        });
    });
    
</script>