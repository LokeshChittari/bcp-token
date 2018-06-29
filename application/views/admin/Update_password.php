<!-- <div class="page-title">
    <div class="title-env">
       
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo base_url();?>"><i class="fa-home"></i>Home</a>
            </li>
            <li>
                <a href="#">Change Password</a>
            </li>
        </ol>
    </div>
</div>  -->          
<div class="row">
    <div class="col-sm-12">
        <?php
        if(isset($flash))
        {
            echo $flash;
        }
        ?> 
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=lang('CHANGE_PASSWORD')?></h3>
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
                
                <form role="form" class="form-horizontal" action="<?=base_url('admin/change_password')?>" method="post">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1"><?=lang('ENTER_YOUR_OLD_PASSWORD')?>:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control"  name="old_password" placeholder="Old Password" value="" required>
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1"><?=lang('ENTER_YOUR_NEW_PASSWORD')?>:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control"  name="new_password" placeholder="New Password" value="" required>
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1"><?=lang('CONFIRM_YOUR_NEW_PASSWORD')?>:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control"  class="span5" placeholder="New password again" value="" required>
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>
                    <div class="form-group">
                         <label class="col-sm-3 control-label" for="field-1"></label>           
                        <div class="col-sm-9">
                            <input type="submit" class="btn btn-success" value="<?=lang('SUBMIT')?>" name="submit">
                            
                        </div>
                    </div>

                </form>
                
            </div>
        </div>

    </div>
</div>
</div>
</div>
    
