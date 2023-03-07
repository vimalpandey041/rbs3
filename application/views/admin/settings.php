<?php $menu_s1 = true; ?>
<?php include_once'inc/header.php';?>
<!-- Main content -->
<div class="content">
    
    
  
              <?php if($this->session->flashdata('setting_msg')){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?=$this->session->flashdata('setting_msg');?>
            </div>
          <?php } ?>
    
<div class="row">
<div class="col-md-5">
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">CHANGE PASSWORD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <?=form_open('admin/settings');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="pass" class="form-control" placeholder="Enter new Password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="update_pass" class="btn btn-primary">
                </div>
              </form>
            </div>

</div>
          
          
          
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
<?php include_once'inc/footer.php'; ?>