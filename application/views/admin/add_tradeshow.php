 <?php $menu_t1=true; ?>
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
                  Details added successfully.
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
                <h3 class="card-title">Add TradeShow</h3>
              </div>
             
<?php echo form_open_multipart('admin/add_tradeshow');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" class="form-control" name="title" required>
                  </div>

                  <div class="form-group">
                    <label for="description">Description</label>
                 <textarea id="ckEditor" class="form-control" name="description"></textarea>
                  </div>
				  
				  
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
				
                 <div class="form-group">
                    <label for="date"> Date</label>
                    <input type="date" class="form-control" name="date" required>
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
  

    <script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 200
      });
    </script>
<?php include_once'inc/footer.php'; ?>
