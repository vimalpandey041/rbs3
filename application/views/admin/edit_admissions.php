<?php include_once'inc/header.php';?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php
            $success = $this->session->userdata('success');
            if($success != ""){?>
            <div class="alert alert-success"><?php echo $success?></div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<form action="<?php echo base_url('admin/edit_admissions/').$get_admissions['uid']?>" method="post">
<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div class="form-group">
                    <label >admissions Name</label>
                    <input type="text" name="admissions_name" placeholder="Enter the admissions " value="<?php echo set_value('admissions_name',$get_admissions['admissions_name'])?>" class="form-control"  >
                    <?php echo form_error('admissions_name')?>
                </div>
                <div class="form-group">
                    <label >admissions URL</label>
                    <input type="text" name="admissions_url" placeholder="Enter the admissions url " value="<?php echo set_value('admissions_url',$get_admissions['admissions_url'])?>" class="form-control"  >
                    <?php echo form_error('admissions_url')?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                        Update
                    </button>
                    <a href="<?php echo base_url('admin/manage_admissions') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
           
        </div>
    </div>
</div>
</form>




<?php include_once'inc/footer.php';?>