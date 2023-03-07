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
<form action="<?php echo base_url('admin/edit_announcement/').$get_announcement['uid']?>" method="post">
<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div class="form-group">
                    <label >Announcement Name</label>
                    <input type="text" name="announcement_name" placeholder="Enter the announcement " value="<?php echo set_value('announcement_name',$get_announcement['announcement_name'])?>" class="form-control"  >
                    <?php echo form_error('announcement_name')?>
                </div>
                <div class="form-group">
                    <label >Announcement URL</label>
                    <input type="text" name="announcement_url" placeholder="Enter the announcement url " value="<?php echo set_value('announcement_url',$get_announcement['announcement_url'])?>" class="form-control"  >
                    <?php echo form_error('announcement_url')?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                        Update
                    </button>
                    <a href="<?php echo base_url('admin/manage_announcement') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
           
        </div>
    </div>
</div>
</form>




<?php include_once'inc/footer.php';?>