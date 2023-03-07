 <?php $menu_page2=true; ?>
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
<?php echo form_open_multipart('admin/edit_page');?>
<input type="hidden" name="id" value="<?= $page->id;?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="pname">Page Title</label>
                    <input type="text" value="<?= $page->title;?>" class="form-control" name="title" required>
                  </div>

                  <div class="form-group">
                    <label for="content">Description</label>
                                                <textarea id="ckEditor" class="form-control" name="content"
                                      placeholder="<?php echo ('content'); ?>"><?php echo $page->content; ?></textarea>
                  </div>
            
                  <div class="form-group">
                    <label for="url">Page URl (Optional)</label>
                    <input type="text" class="form-control" name="url" value="<?= $page->url;?>" required>
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
CKEDITOR.replace( 'ckeditor-textarea' );
</script>

 <script type="text/javascript">
              $(document).ready(function(){
                  $("textarea#ckeditor").ckeditor(function() { }, { resize_enabled : false });
              });
              </script>

    <script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 200
      });
    </script>
<?php include_once'inc/footer.php'; ?>
