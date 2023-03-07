 <?php include_once'inc/header.php'; ?>

 <style type="text/css">
   .note-editor.note-frame {
    border: none;
}
 </style>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <?php if($msg){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  Gallery updated successfully.
            </div>
          <?php } 
          if($img_error){ ?>
            <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?= $img_error; ?>
            </div>
          <?php } ?>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Gallery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<?php echo form_open_multipart('admin/edit_gallery/');?>
<input type="hidden" name="id" value="<?= $gallery->id; ?>">
                <div class="card-body">
                  <div class="form-group">
                    
				  
              	<div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gallery">
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
                  <input type="submit" value="update" name="update" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <script>
      $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 200
      });
	   $('#summernote2').summernote({
		   placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 200
      });
    </script>
<?php include_once'inc/footer.php'; ?>
