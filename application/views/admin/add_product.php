 <?php $menu_p1=true; ?>
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
                  New Product added successfully.
            </div>
          <?php } ?>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add a Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<?php echo form_open_multipart('admin/add_product');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="pname">Product Name</label>
                    <input type="text" class="form-control" name="title" value="<?= set_value('title'); ?>" required>
                  </div>
                    
                    
                  <div class="form-group">
                    <label for="content">Product Description</label>
                    <textarea id="ckEditor" class="form-control" name="content"></textarea>
                  </div>

                  <div class="form-group" style="height:150px;overflow-y:scroll">
                    <label for="cid">Select Category</label>
                      <?php 
                      foreach ($catData as $cvalue) {?>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cid" value="<?=$cvalue['cid'];?>" required>
                          <label class="form-check-label" for="defaultCheck1">
                            <?=$cvalue['cname'];?>
                          </label>
                        </div>
                      <?php }?>
                  </div>

                  <div class="form-group">
                    <label for="curl">Product Price</label>
                    <input type="number" class="form-control" name="price" value="<?= set_value('price',''); ?>" placeholder="7000" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Featured Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="fimage">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
					  <?php if(isset($totalFiles)) echo "Successfully uploaded ".count($totalFiles)." products"; ?>
                        <input type="file" multiple="multiple" class="custom-file-input" name="image[]">
                       
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="purl">Product URl (Optional)</label>
                    <input type="text" class="form-control" name="purl" value="<?= $purl; ?>">
                  </div>
				  
				  <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" class="form-control" name="sku" value="<?= set_value('sku'); ?>" required>
                  </div>
				  
				  <div class="form-group">
                    <label for="maintenance">MAINTENANCE</label>
                   <textarea class="form-control"  name="maintenance"><?= $product->maintenance; ?></textarea>
                  </div>
				  
				  <div class="form-group">
                    <label for="techinfo">TECHNICAL INFORMATION</label>
				  <textarea id="ckEditor1" class="form-control" name="techinfo"></textarea>
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
