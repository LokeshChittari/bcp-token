
<!-- Time Col -->
<div class="row">
   <div class="col-md-12">
      <div class="panel panel-color panel-red">
         <!-- Add class "collapsed" to minimize the panel -->
         <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money"></i> <?=lang('RECEIVE')?></h3>
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
                  <div class="boxed bg--secondary boxed--lg boxed--border">
                     <?php
                        if(isset($flash)){
                            echo $flash;
                        }
                        ?>
                     <?php if(count($address3) > 1){ ?>
                     <div id="view_form" class="card card-1 boxed boxed--sm boxed--border">
                        <a class="btn btn--primary" id="add_adrs" href="<?=base_url('user_address/add_eth_add')?>">
                        <span class="btn__text">Add Ethereum Address</span>
                        </a>
                     </div>
                     <?php
                        }
                        ?> 
                     <?php
                        $i = 0;
                        foreach($address3 as $key=>$add){
                            $i++;
                            if($add->coin_type == 'e'){
                            ?>
                     <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&amp;data=<?= $add->address; ?>" style="width: 40%;padding:20px;" class="center-block"><br /><br />
                     <strong style="padding: 20px;"><?=lang('WALLET_ADDRESS')?></strong> <br />
                     <span style="padding: 20px;margin-bottom: 20px;"><?=$add->address; ?></span><br><br>
                     <?php
                            }
                        }
                        ?>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
</div>