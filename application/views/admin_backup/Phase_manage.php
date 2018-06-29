<div class="page-title">
    <div class="title-env">
        <?php
            if(isset($flash))
            {
                echo $flash;
            }
            ?>
        <a href="<?=base_url('admin/phase_create')?>" class="btn btn-red"><i class="fa fa-plus"></i> Create</a>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo base_url();?>"><i class="fa-home"></i>Home</a>
            </li>
            <li>

                <a href="#">Phase manage</a>
            </li>
        </ol>
    </div>
</div>
<!-- Basic Setup -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Phase manage</h3>
        
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
        
        <script type="text/javascript">
        jQuery(document).ready(function($)
        {
            $("#example-1").dataTable({
                aLengthMenu: [
                    [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
                ]
            });
        });
        </script>
        
        <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Bonus Amount</th>
                    <th>Referral Amount</th>
                    <th>Target</th>
                    <th>Action</th>
                </tr>
            </thead>
        
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Bonus Amount</th>
                    <th>Referral Amount</th>
                    <th>Target</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        
            <tbody>
                <?php
                        foreach ($return->result() as  $row) 
                        {
                            ?>
                            <tr>
                                <td><?=$row->id?></td>
                                <td><?=$row->title?></td>
                                <td><?=$row->start_date?></td>
                                <td><?=$row->end_date?></td>
                                <td><?=$row->bonus_amount?></td>
                                <td><?=$row->reffral_amount?></td>
                                <td><?=$row->target?> </td>
                                <td><a href="<?=base_url('admin/phase_delete/').$row->id?>" onclick="return confirm('Are you sure you want to delete this?');" class="btn btn-red btn-sm"><i class="fa-trash"></i> Delete</a></td>
                            </tr>
                                       
                            <?php
                        }
                        ?>
                
            </tbody>
        </table>
        
    </div>
</div>