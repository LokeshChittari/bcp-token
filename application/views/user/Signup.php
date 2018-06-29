<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <!--<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/img/Coinselforiginal.png">
         <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/Coinselforiginal.png">-->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title><?=$title?></title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <!--     Fonts and icons     -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
      <!-- CSS Files -->
      <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="<?=base_url()?>assets/css/material-kit.css" rel="stylesheet"/>
      <style type="text/css">
         .card-container.card {
         
         padding: 40px 40px;
         }
         .btn {
         font-weight: 700;
         height: 36px;
         -moz-user-select: none;
         -webkit-user-select: none;
         user-select: none;
         cursor: default;
         }
         /*
         * Card component
         */
         .card {
         background-color: #F7F7F7;
         /* just in case there no content*/
         padding: 20px 25px 30px;
         margin: 0 auto 25px;
         margin-top: 50px;
         /* shadows and rounded borders */
         -moz-border-radius: 2px;
         -webkit-border-radius: 2px;
         border-radius: 2px;
         -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
         -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
         box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
         }
         .profile-img-card {
         width: 96px;
         height: 96px;
         margin: 0 auto 10px;
         display: block;
         -moz-border-radius: 50%;
         -webkit-border-radius: 50%;
         border-radius: 50%;
         }
         /*
         * Form styles
         */
         .profile-name-card {
         font-size: 16px;
         font-weight: bold;
         text-align: center;
         margin: 10px 0 0;
         min-height: 1em;
         }
         .reauth-email {
         display: block;
         color: #404040;
         line-height: 2;
         margin-bottom: 10px;
         font-size: 14px;
         text-align: center;
         overflow: hidden;
         text-overflow: ellipsis;
         white-space: nowrap;
         -moz-box-sizing: border-box;
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         }
         .form-signin #inputEmail,
         .form-signin #inputPassword {
         direction: ltr;
         height: 44px;
         font-size: 16px;
         }
         .form-signin input[type=email],
         .form-signin input[type=password],
         .form-signin input[type=text],
         .form-signin button {
         width: 100%;
         display: block;
         margin-bottom: 10px;
         z-index: 1;
         position: relative;
         -moz-box-sizing: border-box;
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         }
         .form-signin .form-control:focus {
         border-color: rgb(104, 145, 162);
         outline: 0;
         -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
         box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
         }
         .btn.btn-signin {
         /*background-color: #4d90fe; */
         background-color: rgb(104, 145, 162);
         /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
         padding: 0px;
         font-weight: 700;
         font-size: 14px;
         height: 36px;
         -moz-border-radius: 3px;
         -webkit-border-radius: 3px;
         border-radius: 3px;
         border: none;
         -o-transition: all 0.218s;
         -moz-transition: all 0.218s;
         -webkit-transition: all 0.218s;
         transition: all 0.218s;
         }
         .btn.btn-signin:hover,
         .btn.btn-signin:active,
         .btn.btn-signin:focus {
         background-color: rgb(12, 97, 33);
         }
         .forgot-password {
         color: rgb(104, 145, 162);
         }
         .forgot-password:hover,
         .forgot-password:active,
         .forgot-password:focus{
         color: rgb(12, 97, 33);
         }
      </style>
   </head>
   <body class="signup-page">
      <div class="wrapper">
         <div class="header header-filter" style="background-image: url('<?=base_url()?>/assets/img/block1.png'); background-size: cover; background-position: top center;">
            <div class="container">
               <div class="">
                  <div class="row">
                     <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <?php
                           if(isset($flash))
                           {
                               echo $flash;
                           }
                           ?>
                        <div class="card card-signup card-container">
                           <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                           <p id="profile-name" class="profile-name-card"></p>
                           <form class="form" method="post" action="<?=base_url('user/signup')?>">
                              <div class="text-center">
                                 <h4 style="color: #000;">SIGN UP</h4>
                                 <div class="social-line">
                                 </div>
                              </div>
                              <p class="text-divider"></p>
                              <div class="content">
                                 <div class="input-group">
                                     <span class="input-group-addon">
                                         <i class="material-icons">face</i>
                                     </span>
                                     <input type="text" name="name" class="form-control" placeholder="Name..." required>
                                     <p class="help-block" style="color: #960004 "><?=form_error('name','<div class="help-block" style="color: red ">', '</div>')?></p>
                                 </div><br>
                                 <div class="input-group">
                                     <span class="input-group-addon">
                                         <i class="material-icons">email</i>
                                     </span>
                                     <input type="text" name="email" class="form-control" placeholder="Email..." required />
                                     <p class="help-block" style="color: #960004 "><?=form_error('email','<div class="help-block" style="color: red ">', '</div>')?></p>
                                 </div>
                                 <br>
                                 <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" name="password" placeholder="Password..." class="form-control" required />
                                        <p class="help-block" style="color: #960004 "><?=form_error('password','<div class="help-block" style="color: red ">', '</div>')?></p>
                                    </div><br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password..." class="form-control" required />
                                         <p class="help-block" style="color: #960004 "><?=form_error('password_confirmation','<div class="help-block" style="color: red ">', '</div>')?></p>
                                    </div><br>
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">add</i>
                                        </span>
                                        <input type="text" name="referral" class="form-control" placeholder="Referral Code..." value="<?=$this->uri->segment(3)?>" >
                                    </div><br>
                              </div>
                              <div class="footer text-center">
                              <input type="submit" class="btn btn-info btn-md" name="register" value="Submit" />
                                 
                              </div>
                           </form>
                           <p class="text-center">All ready Signup Please <a href="<?=base_url('user/login')?>">Login</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <!--   Core JS Files   -->
   <script src="<?=base_url()?>/assets/js/jquery.min.js" type="text/javascript"></script>
   <script src="<?=base_url()?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="<?=base_url()?>/assets/js/material.min.js"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="<?=base_url()?>/assets/js/nouislider.min.js" type="text/javascript"></script>
   <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
   <script src="<?=base_url()?>/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
   <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
   <script src="../assets/js/material-kit.js" type="text/javascript"></script>
</html>