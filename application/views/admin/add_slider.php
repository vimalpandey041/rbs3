  <?php $menu_l1=true; ?>
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
                    Page added successfully.
              </div>
            <?php } ?>

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add a Page</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
  <?php echo form_open_multipart('admin/add_slider');?>
                  
                  <div class="card-body">
                    <div class="form-group">
                      <label for="sname">Slider Name</label>
                    <input type="text" class="form-control" name="sname" value="<?= set_value('sname'); ?>" required>
                    </div>

                    
                    <div class="form-group">
                      <label for="exampleInputFile">Slider Image</label>
                      <small>size:(1300x460)px</small> ṇ
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="simage">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
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

      <script>
        $('#summernote').summernote({
          tabsize: 2,
          height: 200
        });
      </script>
  <?php include_once'inc/footer.php'; ?>
