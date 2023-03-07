<?php $menu_g1 = true; ?>
   <?php include_once'inc/header.php'; ?>
    <!-- Main content -->
	<div class="container">
    <div class="row">
        <div class="col">
            <?php
            $success = $this->session->userdata('success');
            if($success != ""){?>
            <div class="alert alert-success"><?php echo $success?></div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 mx-auto">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Person</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/edit_person_image/6')?>" method="post">
                <div class="card-body">
				
				  
                   <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  multiple="multiple" class="custom-file-input" name="person_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                      <input type="submit" name="submit" class="input-group-text" value="Upload">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="card-footer">
                 
                </div>
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
	
    
<?php include_once'inc/footer.php'; ?>
      
