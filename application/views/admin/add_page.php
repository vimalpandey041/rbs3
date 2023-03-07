 <?php $menu_page1=true; ?>
 <?php include_once'inc/header.php'; ?>

 <style type="text/css">
   .note-editor.note-frame {
    border: none;
}
 </style>
    
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
             
<?php echo form_open_multipart('admin/add_page');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="pname">Page Title</label>
                    <input type="text" class="form-control" name="title" required>
                  </div>

                  <div class="form-group">
                    <label for="content">Description</label>
                    <textarea id="ckEditor" class="form-control" name="content"></textarea>
                  </div>
            
                  <div class="form-group">
                    <label for="url">Page URl (Optional)</label>
                    <input type="text" class="form-control" name="url" value="<?= $purl; ?>">
                  </div>

                </div>
                

                <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  

   
<?php include_once'inc/footer.php'; ?>
<?php $this->load->view("admin/inc/_file_manager_ckeditor"); ?>