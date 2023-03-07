<?php $menu_c2 = true; ?>
<?php include_once'inc/header.php';?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
           <?php if($this->session->flashdata('deleteCat')){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  Product Deleted Successfully.
            </div>
          <?php } 
          ?>


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Categories</h3>

                <div class="card-tools">

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>CATEGORY</th>
                      <th>PRODUCTS</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($data as $cvalue) {
                      $cid = $cvalue['cid'];
$pdata = $this->db->where('cid', $cid)->get('products')->result();
                      
                        $pcount = count($pdata);
                        ?>
                    <tr>
                      <td><?php echo $cvalue['cname']; ?></td>
                      <td><span class="badge badge-warning">( <?php echo $pcount;?> )</span></td>
                      <td><a href="<?= base_url('admin/edit_category'); ?>/<?php echo $cvalue['cid']; ?>">Edit</a></td>
                      <td><a href="<?= base_url('admin/deleteCat');  ?>/<?php echo $cvalue['cid']; ?>/category" onclick="return confirm('Are you sure you want to Remove?');">Delete</a></td>
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
