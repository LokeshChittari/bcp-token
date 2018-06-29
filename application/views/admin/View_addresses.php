<!-- <div class="page-title">
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
</div>  -->
<!-- Basic Setup -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?=lang('STATIC_TABLE')?></h3>
        
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
                    <th><?=lang('S_NO')?></th>
                    <th><?=lang('NAME')?></th>
                    <th><?=lang('ADDRESS')?></th>
                    <th><?=lang('CURRENCY')?></th>
                </tr>
            </thead>
        
            <tfoot>
                <tr>
                    <th><?=lang('S_NO')?></th>
                    <th><?=lang('NAME')?></th>
                    <th><?=lang('ADDRESS')?></th>
                    <th><?=lang('CURRENCY')?></th>
                </tr>
            </tfoot>
        
            <tbody>
                <?php
                $n = 0;
                foreach($address as $add){
                  if($add->coin_type == 'b'){
                    $coin = 'Bitcoin';
                  }elseif($add->coin_type == 'l'){
                    $coin = 'Litecoin';
                  }elseif($add->coin_type == 'e'){
                    $coin = 'Ethereum';
                  }
                  $n++;
                  ?>
                  <tr>
                    <td><?=$n?></td>
                    <td><?=$add->name?></td>
                    <td><?=$add->address?></td>
                    <td><?=$coin?></td>
                  </tr>
                  <?php
                }
                ?>
                
            </tbody>
        </table>
        
    </div>
</div>