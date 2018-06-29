<div class="page-title">
    <div class="title-env">
        <button class='btn btn-info btn-large' id='authorize_all' >Authorize All</button>
        <button class='btn btn-info btn-large' id='unauthorize_all' >Unauthorize All</button>   
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
        <h3 class="panel-title">Permission</h3>
        
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
                    <th>Status</th>
                </tr>
            </thead>
        
            <tfoot>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        
            <tbody>
                <?php
                        $i = 0;
                        foreach ($result as $row)
                        {
                            $i++;
                            ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$row->name?></td>
                                <td><?=$row->email?></td>
                                <td><?php
                                  if($row->permission == 0){
                                    echo "<p id='p".$row->id."' style='float:left'>Unauthorized</p>";
                                    echo "<button style='float:right' class='btn btn-success' id='unauthorized".$row->id."' onClick='permission_withdrawal(".'"unauthorized"'.",".$row->id.")'>Click to authorize</button>";
                                  }else{
                                    echo "<p 'p".$row->id."' style='float:left'>Authorized</p>";
                                    echo "<button style='float:right' class='btn btn-red' id='authorized".$row->id."' onClick='permission_withdrawal(".'"authorized"'.",".$row->id.")'>Click to unauthorize</button>";
                                  }
                                ?></td>
                            </tr>
                            <?php
                        }
                        ?>
            </tbody>
        </table>
        
    </div>
</div>
<script>
    function permission_withdrawal(status,id){
        if(status == 'unauthorized'){
            var url = "<?=base_url('admin/authorize_user');?>";
        }else{
            var url = "<?=base_url('admin/unauthorize_user');?>";
        }
        dataa = "id="+id;
        $.ajax({
            type:"POST",
            url : url,
            data:dataa,
            success:function(response){
                window.location.href="<?=base_url('admin/withdrawal_permission')?>";
                
            }
        });
    }
    $("#authorize_all").click(function(){
        $.ajax({
            type:"POST",
            url : "<?=base_url('admin/authorize_all_user');?>",
            success:function(response){
                window.location.href="<?=base_url('admin/withdrawal_permission')?>";
            }
        });   
    });
    $("#unauthorize_all").click(function(){
        $.ajax({
            type:"POST",
            url : "<?=base_url('admin/unauthorize_all_user');?>",
            success:function(response){
                window.location.href="<?=base_url('admin/withdrawal_permission')?>";
            }
        });   
    });
</script>