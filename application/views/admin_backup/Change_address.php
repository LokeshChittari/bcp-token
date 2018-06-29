<div class="page-title">
    <div class="title-env">
       
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo base_url();?>"><i class="fa-home"></i>Home</a>
            </li>
            <li>
                <a href="#">Users</a>
            </li>
        </ol>
    </div>
</div>           
<div class="row">
    <div class="col-sm-12">
        <style type="text/css">
            .error {
               color: red;
               }
        </style>
            <?php
             if(isset($flash))
             {
                echo $flash;
             }
             $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
             echo validation_errors();
            ?>   
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create user</h3>
                <div class="panel-options">
                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                    <a href="#" data-toggle="remove">
                        &times;
                    </a>
                </div>
            </div>
            <div class="panel-body">
                
                <form role="form" class="form-horizontal" action="<?=base_url('admin/admin_address')?>" method="post">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Name:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="name" value="<?=$name?>">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Email:</label>

                        <div class="col-sm-9">
                            <input type="emaul" class="form-control" name="email" placeholder="email" value="<?=$email?>">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Password:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control"  name="password" placeholder="password" value="<?=$password?>">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Password Confirmation:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control"  name="password_confirmation" placeholder="Password Confirmation" value="<?=$password_confirmation?>">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Private Key:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="private_key" placeholder="Private Key" value="<?=$private_key?>">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Key_password:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="key_password" placeholder="Key Password" value="<?=$key_password?>">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>
                    <div class="form-group">
                         <label class="col-sm-3 control-label" for="field-1"></label>           
                        <div class="col-sm-9">
                            <input type="submit" class="btn btn-success" value="submit" name="submit">
                            
                        </div>
                    </div>

                </form>
                
            </div>
        </div>

    </div>
</div>
    
<!-- Or class "fixed" to  always fix the footer to the end of page -->
<footer class="main-footer sticky footer-type-1">
    
    <div class="footer-inner">
        <div class="footer-text">
            &copy; 2018 
            <strong>NJC</strong> 
            Powred by <a href="#" target="_blank">NJC </a>
        </div>
       
        <div class="go-up">
        
            <a href="#" rel="go-top">
                <i class="fa-angle-up"></i>
            </a>
            
        </div>
        
    </div>
    
</footer>
</div>
</div>
    
