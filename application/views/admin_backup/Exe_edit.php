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
    <div id="content-header">
        <div id="breadcrumb"><a href="#" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a><div class="tooltip fade bottom in" style="top: 36px; left: 0.5px; display: block;"><div class="tooltip-arrow"></div><div class="tooltip-inner">Go to Home</div></div> <a href="http://book.urbanrira.com/Author/manage">Product</a><a href="#" class="current">Create</a></div>
        <!--<h1>Categories</h1>-->
    </div>
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Insert category Details</h3>
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
                
                <form role="form" class="form-horizontal" action="<?=base_url('admin/fees')?>" method="post">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Status:</label>

                        <div class="col-sm-9">
                            <select class="form-control" name="status">
                                <option value="0">Pending</option>
                                <option value="1">Successful</option>
                                <option value="2">Declined</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Transaction Id :</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="transaction_id" placeholder="Transaction Id" >
                            
                        </div>
                    </div>

                    <div class="form-group-separator"></div>
                    <div class="form-group">
                         <label class="col-sm-3 control-label" for="field-1"></label>           
                        <div class="col-sm-9">
                            <input type="submit" class="btn btn-secondary" value="submit" name="submit">
                            
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
    
