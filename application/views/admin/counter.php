<?php $menu_co1 = true; ?>
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
                <h3 class="card-title">All Visitors</h3>

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
                      <th>NO.</th>
                      <th>IP</th>
                      <th>VIEWS</th>
                      <th>DATE</th>
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
