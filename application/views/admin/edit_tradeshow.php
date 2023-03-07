
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
                  Page updated successfully.
            </div>
          <?php } ?>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<?php echo form_open_multipart('admin/edit_tradeshow');?>
<input type="hidden" name="id" value="<?= $tradeshow->id;?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" value="<?= $tradeshow->title;?>" class="form-control" name="title" required>
                  </div>

                  <div class="form-group">
                    <label for="description">Description</label>
                   <textarea id="ckEditor" class="form-control" name="description"
                                      placeholder="<?php echo ('description'); ?>"><?php echo $tradeshow->description; ?></textarea>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="tradeshow">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date" value="<?= $tradeshow->date;?>" required>
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

    <script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 200
      });
    </script>
<?php include_once'inc/footer.php'; ?>
