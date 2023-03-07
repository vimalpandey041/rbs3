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
 <?php echo form_open_multipart('admin/add_person');?>
                <div class="card-body">
				
				  
                   <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  multiple="multiple" class="custom-file-input" name="person_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label >Person Name</label>
                    <input type="text" name="person_name" placeholder="Enter the Person Name " value="<?php echo set_value('person_name')?>" class="form-control"  >
                    <?php echo form_error('person_name')?>
                </div>
                <div class="form-group">
                    <label >Post</label>
                    <input type="text" name="person_post" placeholder="Enter the Person Post " value="<?php echo set_value('person_post')?>" class="form-control"  >
                    <?php echo form_error('person_post')?>
                </div>
                  </div>
                  <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary">
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
      
