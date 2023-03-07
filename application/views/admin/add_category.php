<?php $menu_c1 = true; ?>
   <?php include_once'inc/header.php'; ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <?php if($msg){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  Category Successfully Added.
            </div>
          <?php } 
          elseif($img_error){ ?>
            <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?= $img_error; ?>
            </div>
          <?php } ?>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add a Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<?php echo form_open_multipart('admin/add_category');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="cname">Category Name</label>
                    <input type="text" class="form-control" name="cname" placeholder="Enter category name">
                  </div>
                  <div class="form-group">
                    <label for="curl">Category URL</label>
                    <input type="text" class="form-control" name="curl" placeholder="optional">
                  </div>
                  <div class="form-group">
                    <label for="curl">Descripiotn</label>
					<textarea class="form-control"  name="description" placeholder="write description"></textarea>                    
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Category Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="cimage">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
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
