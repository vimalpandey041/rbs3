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
                <h3 class="card-title">Upload Gallery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
 <?php echo form_open_multipart('admin/edit_director');?>
                <div class="card-body">
				
				  
                   <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  multiple="multiple" class="custom-file-input" name="director_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
				  
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary">
                  <a href="<?php echo base_url('admin/manage_director_corner')?>" class="btn btn-danger" >Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
	
    
<?php include_once'inc/footer.php'; ?>
      
