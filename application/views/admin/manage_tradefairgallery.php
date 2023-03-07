<?php $menu_f2 = true; ?>
<?php include_once'inc/header.php';?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
           <?php if($this->session->flashdata('deletefair')){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  Data Deleted Successfully.
            </div>
          <?php } 
          ?>

  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage TradeFairGallery</h3>

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
                      <th style="min-width:270px">SNO</th>
                    <th>SMALL Image</th>
					 <th>Large Image</th>
                      <th>DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($data as $fvalue) {
                        ?>
                    <tr>
                      <td><?php echo $fvalue['id']; ?></td>
					  <td><img src="<?= base_url('uploads/tradegallery');?>/<?php echo $fvalue['smallimage']; ?>" width="70px" height="70px"></td>
                     <td><img src="<?= base_url('uploads/tradegallery');?>/<?php echo $fvalue['largeimage']; ?>" width="200px" height="200px"></td>
            <td><a href="<?= base_url('admin/deletefair');  ?>/<?php echo $fvalue['id']; ?>/tradefairgallery" onclick="return confirm('Are you sure you want to Remove?');">Delete</a></td>
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
