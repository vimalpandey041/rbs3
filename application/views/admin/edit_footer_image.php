<?php $menu_g1 = true; ?>
   <?php include_once'inc/header.php'; ?>
    <!-- Main content -->
	
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 mx-auto">
           
    
           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Upload Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
 <?php echo form_open_multipart('admin/edit_footer_image');?>
                <div class="card-body">
				
				  
                   <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  multiple="multiple" class="custom-file-input" name="footer_image">
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
      
