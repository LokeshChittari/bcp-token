<!-- Prifile -->

    <!-- Row 3 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-color panel-red">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user"></i> <?=lang('UPDATE_PROFILE')?></h3>
                    
                    <div class="panel-options">
                        
                        <a href="#" data-toggle="reload">
                            <i class="fa-rotate-right"></i>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="card-content">
                        <div class="row">
                            <div class="card" style="min-height: 300px;">      
         
                        <?php
                        if(isset($flash))
                        {
                            echo $flash;
                        }
                        ?>
                        <div class="col-md-12" style="text-align: center;">
                            <a href="<?=base_url('user/change_password')?>" style="text-transform: uppercase;">
                                <h4 class="btn btn-orange"><?=lang('CHANGE_PASSWORD')?></h4></a>
                        </div>  
                            <div class="boxed bg--secondary boxed--lg boxed--border"> 
                                                      
                                <form method="post" action="<?=base_url('user/update_name');?>">
                                     <div class="col-md-12" style="margin-top: 50px;">
                                            <label style="margin-left: 25px;"><?=lang('EMAIL')?>: </label>
                                            <span class="h5"><?=$profile->email;?></span>
                                        </div> 
                                      
                                       <div class=" form-group" style="padding: 40px;">
                                            <label><?=lang('NAME')?>:</label> 
                                            <input class="validate-required form-control" type="text" value="<?=$profile->name;?>" name="name" /><br />
                                            <input type="submit" name="submit" value="<?=lang('UPDATE_NAME')?>" class="btn btn-red btn-sm"/>
                                        </div>
                                </form>
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