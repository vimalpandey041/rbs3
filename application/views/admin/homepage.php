<?php $menu_h1 = true; ?>
   <?php include_once'inc/header.php'; ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <?php if($this->session->flashdata('homepage_msg')){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?=$this->session->flashdata('homepage_msg');?>
            </div>
          <?php } ?>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Homepage Description</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<?php echo form_open_multipart('admin/homepage');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="cname">Title</label>
                    <input type="text" class="form-control" name="title" value="<?=$data->title;?>">
                  </div>
                  <div class="form-group">
                    <label for="excerpt">Short Description</label>
                   <textarea id="ckEditor" class="form-control" name="excerpt"
                                      placeholder="<?php echo ('excerpt'); ?>"><?php echo $homepage->excerpt; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="content">Full Description</label>
                  <textarea id="ckEditor1" class="form-control" name="content"
                                      placeholder="<?php echo ('content'); ?>"><?php echo $homepage->content; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="curl">URL (optional)</label>
                    <input type="text" class="form-control" name="url" value="<?=$data->url;?>">
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
      });
        $('#summernote2').summernote({
      });
    </script>
<?php include_once'inc/footer.php'; ?>
