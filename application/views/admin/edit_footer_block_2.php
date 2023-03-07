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
<form action="<?php echo base_url('admin/edit_footer_block_2/').$get_footer_block_2['uid']?>" method="post">
<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div class="form-group">
                    <label >footer_block_2 Name</label>
                    <input type="text" name="footer_block_2_name" placeholder="Enter the footer_block_2 " value="<?php echo set_value('footer_block_2_name',$get_footer_block_2['footer_block_2_name'])?>" class="form-control"  >
                    <?php echo form_error('footer_block_2_name')?>
                </div>
                <div class="form-group">
                    <label >footer_block_2 URL</label>
                    <input type="text" name="footer_block_2_url" placeholder="Enter the footer_block_2 url " value="<?php echo set_value('footer_block_2_url',$get_footer_block_2['footer_block_2_url'])?>" class="form-control"  >
                    <?php echo form_error('footer_block_2_url')?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                        Update
                    </button>
                    <a href="<?php echo base_url('admin/manage_footer_block_2') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
           
        </div>
    </div>
</div>
</form>




<?php include_once'inc/footer.php';?>