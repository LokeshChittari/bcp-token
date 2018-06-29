<div class="page-title">
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
</div>            
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
                <h3 class="panel-title">Minimum Token</h3>
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
                        <label class="col-sm-3 control-label" for="field-1">Purchase Minimum Token :</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="min_token" placeholder="Minimum Token" value="<?=$min_token; ?>">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>
                    <div class="form-group">
                         <label class="col-sm-3 control-label" for="field-1"></label>           
                        <div class="col-sm-9">
                            <input type="submit" class="btn btn-secondary" value="submit" name="submit">
                            <p class="help-block" style="color: #960004 "></p>
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
    
