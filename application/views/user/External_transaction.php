    <!-- Row 3 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-color panel-red"><!-- Add class "collapsed" to minimize the panel -->
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-paper-plane-o"></i><?=lang('SEND_TOKEN')?></h3>
                    
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
                                if(isset($flash))
                                {
                                    echo $flash;
                                }

                                if($withdrawal_permission == 0){
                                    ?>
                                        <div class="alert alert-info alert-with-icon" data-notify="container">
                                        <button type="button" aria-hidden="true" class="close">×</button>
                                        <i data-notify="icon" class="material-icons">add_alert</i>
                                        <span data-notify="message">You don't have permission to withdraw Coinself Coin.</span>
                                        </div>
                                    <?php
                                }else{
                                    ?>
                                <div class="card">
                                    <div class="card-content">
                                    <form method="post" action="<?=base_url('user/save_external_transaction')?>">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><?=lang('ADDRESS')?></label>
                                                    <input type="text" class="form-control" name="address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><?=lang('AMOUNT')?></label>
                                                    <input type="text" class="form-control" name="amount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><?=lang('FEES_IN_ETHER')?></label>
                                                    <input type="text" class="form-control" name="fees" value="<?=$extrnl;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><?=lang('PASSWORD')?></label>
                                                    <input type="password" class="form-control" name="token_password" placeholder="********">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-red pull-right" value="<?=lang('SEND_AMOUNT')?>">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                                    <?php
                                }
                                ?>
                                
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