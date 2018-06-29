<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="Xenon Boostrap Admin Panel" />
      <meta name="author" content="" />
      <title>Xenon - Dashboard 4</title>
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
   <body class="page-body skin-facebook">
      <!-- navbar -->
      <div class="page-container">
      <!-- End Nav Bar -->
      <!-- Main Content -->
      <div class="main-content">
      <!-- Time Col -->
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-color panel-blue">
               <!-- Add class "collapsed" to minimize the panel -->
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
                        <div class="col-md-9">
                           <div class="col s12 m2">
                              <p class="z-depth-5"><?=$this->session->flashdata('flashdata');?></p>
                           </div>
                           <div class="card">
                              <div class="card-content">
                                 <?php
                                    if(isset($flash))
                                    {
                                        echo $flash;
                                    }
                                    ?>
                                 <form method="post" action="<?=base_url('user/success')?>">
                                    <?php
                                       if(isset($qrcode))
                                       {
                                           ?>
                                    <div class="row">
                                       <div class="col-md-12 ">
                                          <div class="form-group label-floating">
                                             <label class="control-label">QR code</label>
                                             <img alt="Image" style="height: 252px; width: 250px;"; src="<?=$qrcode?>" />
                                          </div>
                                       </div>
                                    </div>
                                    <?php
                                       }
                                       ?>
                                    <div class="row">
                                       <div class="col-md-12 ">
                                          <div class="form-group label-floating">
                                             <label class="control-label">OTP</label>
                                             <input type="text" class="form-control" id="__tkn_amt__" name="qrcode" autocomplete="off" required>
                                          </div>
                                       </div>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-info pull-right" value="submit">
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