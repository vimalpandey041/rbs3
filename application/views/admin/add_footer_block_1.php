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
<form action="<?php echo base_url('admin/add_footer_block_1') ?>" method="post">
<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div class="form-group">
                    <label >footer_block_1 Name</label>
                    <input type="text" name="footer_block_1_name" placeholder="Enter the footer_block_1 " value="<?php echo set_value('footer_block_1_name')?>" class="form-control"  >
                    <?php echo form_error('footer_block_1_name')?>
                </div>
                <div class="form-group">
                    <label >footer_block_1 URL</label>
                    <input type="text" name="footer_block_1_url" placeholder="Enter the footer_block_1 url " value="<?php echo set_value('footer_block_1_url')?>" class="form-control"  >
                    <?php echo form_error('footer_block_1_url')?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                        Add
                    </button>
                    <a href="<?php echo base_url('admin/manage_footer_block_1') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
           
        </div>
    </div>
</div>
</form>




<?php include_once'inc/footer.php';?>