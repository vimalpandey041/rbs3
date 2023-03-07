<?php $menu_o1 = true; ?>
<?php include_once'inc/header.php';?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
           <?php if($this->session->flashdata('deleteCat')){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  Order Deleted Successfully.
            </div>
          <?php } 
          ?>


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage ORDERS</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ORDER_ID</th>
                      <th>PRODUCTS</th>
                      <th>CUSTOMER NAME</th>
                      <th>PAYMENT</th>
                      <th>SHIPPING</th>
                      <th>DATE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($data as $cvalue) {
                      $pid = $cvalue['pid'];
$pdata = $this->db->where('pid', $pid)->get('products')->result();
$customer = $this->db->where('customer_id', $cvalue['customer_id'])->get('customer')->row('name');                      
                        $pcount = count($pdata);
                        ?>
                    <tr>
                      <td><?php echo $cvalue['order_id']; ?></td>
                      <td><a href="<?=base_url('admin/order_view');?>/<?=$cvalue['order_id'];?>"><?=$cvalue['name'];?></a></td>
                      <td><?=$customer;?></td>
                      <td><?=$cvalue['payment_status']?></td>
                      <td>Pending</td>
                      <td><?=$cvalue['date'];?></td>
                    </tr>
                      
                    <?php
                      //}
                    }
                     ?>
                    
 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php include_once'inc/footer.php'; ?>
