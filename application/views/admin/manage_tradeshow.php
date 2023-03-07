<?php $menu_t2 = true; ?>
<?php include_once'inc/header.php';?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
           <?php if($this->session->flashdata('deletetrade')){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  Page Deleted Successfully.
            </div>
          <?php } 
          ?>

   <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage TradeShow</h3>

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
                      <th style="min-width:270px">TITLE</th>
                      <th>DESCRIPTION</th>
					   <th>Image</th>
					   <th>DATE</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($data as $tvalue) {
                        ?>
                    <tr>
                      <td><?php echo $tvalue['title']; ?></td>
                       <td><?php echo $tvalue['description']; ?></td>
					  <td><img src="<?= base_url('uploads/gallery');?>/<?php echo $tvalue['image']; ?>" width="70px" height="70px"></td>
					   <td><?php echo $tvalue['date']; ?></td>
                         <td><a href="<?= base_url('admin/edit_tradeshow'); ?>/<?php echo $tvalue['id']; ?>">Edit</a></td>
                    <td><a href="<?= base_url('admin/deletetrade');  ?>/<?php echo $tvalue['id']; ?>/tradeshow" onclick="return confirm('Are you sure you want to Remove?');">Delete</a></td>
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
