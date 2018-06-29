<!-- <div class="page-title">
    <div class="title-env">
       
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo base_url();?>"><i class="fa-home"></i>Home</a>
            </li>
            <li>

                <a href="#">Token Amount</a>
            </li>
        </ol>
    </div>
</div>   -->          
<div class="row">
    <div class="col-sm-12">
        <?php
            if($this->session->flashdata('item'))
            {
                echo $this->session->flashdata('item');
            }
            ?>  
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=lang('MINIMUM_TOKEN')?></h3>
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
                
                <form role="form" class="form-horizontal" action="<?=base_url('admin/minimum_token')?>" method="post">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1"><?=lang('PURCHASE_MINIMUM_TOKEN')?> :</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="min_token" placeholder="Minimum Token" value="<?=$min_token; ?>">
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
                 
            </div>
        </div>

    </div>
</div>
</div>
</div>
    
