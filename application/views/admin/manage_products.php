 <?php $menu_p2=true; ?>
   <?php include_once'inc/header.php'; ?>

      <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
           <?php if($this->session->flashdata('delete')){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  Product Deleted Successfully.
            </div>
          <?php } 
          ?>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Products</h3>

                <div class="card-tools">
                  <?= form_open('admin/manage_products');?>
				  
                  <label>Filter by Category</label>
                  <div class="input-group input-group-sm" style="width: 300px;">
                    <select name="cat_filter" class="form-control">
                      <option value="">All</option>
                      <?php
                      $cdata = $this->db->get('category')->result();
                      foreach ($cdata as $cdata) {?>
                      <option value="<?=$cdata->cid;?>"><?=$cdata->cname;?></option>
                    <?php } ?>
                    </select>
                    <div class="input-group-append">
                      <input type="submit" name="filter" class="btn btn-default" value="GO">
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>IMAGE</th>
                      <th>NAME</th>
                      <th>PRICE</th>
                      <th>CATEGORY</th>
                      <th>DATE</th>
					  <th>PRODUCT IMAGE</th>
					  <th>SKU</th>
					  <!--<th>MAINTENANCE</th>
					  <th>TECHNICAL INFORMATION</th>-->
                     
					  <th>EDIT</th>
                      <th>DELETE</th>
					   <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($data as $pvalue) {
                      $cid = $pvalue['cid'];
                      $cdata = $this->db->where('cid', $cid)->get('category')->row();
                      
                        ?>
                    <tr>
                      <td><img src="<?= base_url('uploads/fimage');?>/<?php echo $pvalue['fimage']; ?>" width="70px" height="70px"></td>
                      <td><?php echo $pvalue['title']; ?></td>
                      <td>Rs.<?php echo $pvalue['price']; ?></td>
                      <td><?php echo $cdata->cname; ?></td>
                      <td><?php echo $pvalue['date']; ?></td>
					  <td><img src="<?= base_url('uploads/image');?>/<?php echo $pvalue['image']; ?>" width="70px" height="70px"></td>
					  <td><?php echo $pvalue['sku']; ?></td>
					  <td><?php /* echo $pvalue['maintenance']; */ ?></td>
					  <td><?php /* echo $pvalue['techinfo']; */ ?></td>
                      <td><a href="edit_product/<?php echo $pvalue['pid']; ?>">Edit</a></td>
                      <td><a href="<?= base_url('admin/delete'); ?>/<?php echo $pvalue['pid']; ?>/products">Delete</a></td>
					  <td align='center'><input type="checkbox" class='checkbox' name='delete' value='<?= $pid ?>' ></td>
           
                    </tr>
                      
                    <?php
                      
                    }
                     ?>
                   
 
                  </tbody>
                </table>
				<nav class='text-center'>
    <?php echo $pagination_links; ?>
	<!-- <ul class="pagination">
		<li><a href="">1</a></li>
		<li><a href="">2</a></li>
		<li><a href="">3</a></li>
	</ul> -->
        </nav>

              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
		
      </div><!-- /.container-fluid -->
        <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
<style>
.removeRow
{
 background-color: #FF0000;
    color:#FFFFFF;
}
</style>


  <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

<script>
$(document).ready(function(){
 
 $('.delete_checkbox').click(function(){
  if($(this).is(':checked'))
  {
   $(this).closest('tr').addClass('removeRow');
  }
  else
  {
   $(this).closest('tr').removeClass('removeRow');
  }
 });

 $('#delete_all').click(function(){
  var checkbox = $('.delete_checkbox:checked');
  if(checkbox.length > 0)
  {
   var checkbox_value = [];
   $(checkbox).each(function(){
    checkbox_value.push($(this).val());
   });
   $.ajax({
    url:"<?php echo base_url(); ?>Admin/delete_all",
    method:"POST",
    data:{checkbox_value:checkbox_value},
    success:function()
    {
     $('.removeRow').fadeOut(1500);
    }
   })
  }
  else
  {
   alert('Select atleast one records');
  }
 });

});
</script>
    <!-- /.content -->
<?php include_once'inc/footer.php'; ?>
