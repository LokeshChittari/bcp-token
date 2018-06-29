<!--<div class="page-title">
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
</div>    -->        
<div class="row">
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=lang('TOKEN_AMOUNT')?></h3>
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
                <?php
                    if(isset($flash))
                    {
                        echo $flash;
                    }
                    ?>                    
                <?php
                    foreach ($result as $r) {
                        if($r->coin_type == 'e'){
                            $coin = 'Ehtereum';
                        }
                        ?>
                <form role="form" class="form-horizontal" action="<?=base_url('admin/fees')?>" method="post">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1"><?=lang('PRICE_OF_TOKEN_IN_ETHER')?>:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="external" placeholder="External Transaction" value="<?=$r->external; ?>">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>
                    <div class="form-group">
                         <label class="col-sm-3 control-label" for="field-1"></label>           
                        <div class="col-sm-9">
                            <input type="submit" class="btn btn-secondary" value="<?=lang('SUBMIT')?>" name="submit">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                </form>
                 <?php
                        }
                        ?>
            </div>
        </div>

    </div>
</div>
</div>
</div>
    
