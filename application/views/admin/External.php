<div class="page-title">
    <div class="title-env">
       
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo base_url();?>"><i class="fa-home"></i>Home</a>
            </li>
            <li>
                <a href="#">citys</a>
            </li>
        </ol>
    </div>
</div> 
<!-- Basic Setup -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">External Transaction Requests</h3>
        
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
                    <th>Sender Id</th>
                    <th>Address</th>
                    <th>Amount</th>
                    <th>Coint Type</th>
                    <th>Fees</th>
                    <th>Date Of Creation</th>
                    <th>Action</th>
                </tr>
            </thead>
        
            <tfoot>
                <tr>
                    <th>S.No</th>
                    <th>Sender Id</th>
                    <th>Address</th>
                    <th>Amount</th>
                    <th>Coint Type</th>
                    <th>Fees</th>
                    <th>Date Of Creation</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        
            <tbody>
                <?php
                        $i = 0;
                        foreach ($return->result() as $row)
                        {

                            if($row->coin_type == 'b'){
                                $coin = 'Bitcoin';
                            }elseif($row->coin_type == 'e'){
                                $coin = 'Ethereum';
                            }elseif($row->coin_type == 'l'){
                                $coin = 'Litecoin';
                            }
                            $i++;
                            ?>
                            <tr>
                                <td><?=$i;?></td>
                                <td><?=$row->unique_id?></td>
                                <td><?=$row->address?></td>
                                <td><?=$row->amount?></td>
                                <td><?=$coin?></td>
                                <td><?=$row->fees?></td>
                                <td><?=$row->date_of_creation?></td>
                                <td><a href="<?=base_url('admin/ext_edit/').$row->exe_id?>">edit</a> </td>
                            </tr>
                            <?php
                        }
                        ?>
                
            </tbody>
        </table>
        
    </div>
</div>