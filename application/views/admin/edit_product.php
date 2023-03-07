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
                  Product updated successfully.
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
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<?php echo form_open_multipart('admin/edit_product/');?>
<input type="hidden" name="pid" value="<?= $product->pid; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="pname">Product Name</label>
                    <input type="text" class="form-control" name="title" value="<?= $product->title; ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="cid">Choose Category</label>
                    <select class="form-control" name="cid" required>
                      <?php 
                      foreach ($catData as $cvalue)
                      {						  
$image = str_replace(".jpg","_thumb.jpg",$cvalue['image']);
$image = str_replace(".png","_thumb.png",$image);
$image = str_replace(".JPG","_thumb.JPG",$image);
$image = str_replace(".PNG","_thumb.PNG",$image);

                        if($cvalue['cid']==$product->cid){$selected="selected";}
                        else{$selected="";}?>
                        <option value="<?=$cvalue['cid'];?>" <?= $selected?>><?=$cvalue['cname']; ?></option>";
                      <?php
                      } 
                       ?>
                      
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="content">Product Description</label>
                   <textarea id="ckEditor" class="form-control" name="content"
                                      placeholder="<?php echo ('content'); ?>"><?php echo $product->content; ?></textarea>
                  </div>
            
                  <div class="form-group">
                    <label for="curl">Product Price</label>
                    <input type="number" class="form-control" name="price" value="<?= $product->price; ?>" placeholder="7000" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Featured Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="fimage">
                        <label class="custom-file-label" for="exampleInputFile">Change Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
					
                  </div>
				                 <div class="form-group">				  
                    <input type="hidden" name="old_pimage" value="<?= $product->productimage; ?>">
                   <img width="130" src="<?= base_url('uploads/fimage/');?><?= $product->image; ?>"> 					
                  </div>
				   <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="pimage">
                        <label class="custom-file-label" for="exampleInputFile">Change Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">				  
                    <input type="hidden" name="old_pimage" value="<?= $product->productimage; ?>">
                   <img width="130" src="<?= base_url('uploads/image/');?><?= $product->image; ?>"> 					
                  </div>

                  <div class="form-group">
                    <label for="purl">Product URl (Optional)</label>
                    <input type="text" class="form-control" name="purl" value="<?= $product->purl; ?>">
                  </div>
				  
				    <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" class="form-control" name="sku" value="<?= $product->sku; ?>" required>
                  </div>
				  
				     <div class="form-group">
                    <label for="maintenance">MAINTENANCE</label>
                   <textarea class="form-control"  name="maintenance"><?= $product->maintenance; ?></textarea>
                  </div>
				  
                  <div class="form-group">
                    <label for="techinfo">TECHNICAL INFORMATION</label>
                    <textarea id="ckEditor1" class="form-control" name="techinfo"
                                      placeholder="<?php echo ('techinfo'); ?>"><?php echo $product->techinfo; ?></textarea>
				  
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
