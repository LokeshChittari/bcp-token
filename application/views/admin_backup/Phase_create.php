<div class="page-title">
    <div class="title-env">
       
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo base_url();?>"><i class="fa-home"></i>Home</a>
            </li>
            <li>
                <a href="#">Phase create</a>
            </li>
        </ol>
    </div>
</div>           
<div class="row">
    <div class="col-sm-12">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Phase create</h3>
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
                
                <form role="form" class="form-horizontal" action="<?=base_url('admin/phase_create/').$update_id?>" method="post">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Phase title:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="title" placeholder="Phase title" value="" required="">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Bonus Amount:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="bonus_amount" placeholder="Bonus Amount" value="<?=$bonus_amount?>" required="" maxlength="2">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Reffral Amount:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="reffral_amount" placeholder="Reffral Amount" value="<?=$reffral_amount?>" required="" maxlength="2">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Target:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="target" placeholder="Target" value="<?=$target?>" required="">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Start date:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="start_date" placeholder="Start date" 
                                     id="datepicker" required="">
                            <p class="help-block" style="color: #960004 "></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">End Date:</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="end_date" placeholder="End date"  id="end_date" required="">
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
    
