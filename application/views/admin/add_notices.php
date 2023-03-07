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
<form action="<?php echo base_url('admin/add_notices') ?>" method="post">
<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div class="form-group">
                    <label >Notice Name</label>
                    <input type="text" name="notices_name" placeholder="Enter the notices " value="<?php echo set_value('notices_name')?>" class="form-control"  >
                    <?php echo form_error('notices_name')?>
                </div>
                <div class="form-group">
                    <label >Notice URL</label>
                    <input type="text" name="notices_url" placeholder="Enter the notices url " value="<?php echo set_value('notices_url')?>" class="form-control"  >
                    <?php echo form_error('notices_url')?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                        Add
                    </button>
                    <a href="<?php echo base_url('admin/manage_news_events') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
           
        </div>
    </div>
</div>
</form>




<?php include_once'inc/footer.php';?>