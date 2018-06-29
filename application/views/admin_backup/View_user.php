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
<!-- Basic Setup -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Internal Transaction History</h3>
        
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
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Unique Id</th>
                    <th>Balance</th>
                    <th>Date Of Creation</th>
                    <th>Status</th>
                </tr>
            </thead>
        
            <tfoot>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Unique Id</th>
                    <th>Balance</th>
                    <th>Date Of Creation</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        
            <tbody>
                <?php
                    $i = 0;
                    foreach ($result as $row)
                    {
                        $i++;
                        if($row->u_status == 1)
                        {
                        ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?=$row->name?></td>
                            <td><?=$row->email?></td>
                            <td><?=$row->unique_id?></td>
                            <td><?=round($row->token_amt/1000000000000000000); ?></td>
                            <td><?=$row->date_of_creation?></td>
                            <td>
                            <?php 
                              if($row->u_status == 1)
                              {
                                ?>
                                 <a type="button" class="btn btn-red" href="<?=base_url('admin/user_block/block/').$row->id?>" onclick="return confirm('Are you sure you want to delete that user?')"><i class="fa-trash"></i> Delete</a>
                              <?php
                              }
                              else
                              {
                                ?>
                                 <a type="button" class="btn btn-success" href="<?=base_url('admin/user_block/unblock/').$row->id?>" onclick="return confirm('Are you sure you want to Unblock that user?')">Unblock</a>
                                <?php
                              }
                             ?>
                             </td>
                        </tr>
                        <?php
                    }
                }
                    ?>
                
            </tbody>
        </table>
        
    </div>
</div>