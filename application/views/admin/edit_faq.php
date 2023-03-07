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
<form action="<?php echo base_url('admin/edit_faq/').$get_faq['uid'] ?>" method="post">
<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div class="form-group">
                    <label > FAQ Heading </label>
                     <input type="text" name="faq_heading" placeholder="Enter the FAQ heading " value="<?php echo set_value('faq_heading',$get_faq['faq_heading'])?>" class="form-control"  >
                    <?php echo form_error('faq_heading')?>
                </div>
                <div class="form-group">
                    <label >FAQ Data</label>
                   <textarea name="faq_data" id="ckEditor" cols="30" rows="10"  class="form-control"><?php echo set_value('faq_data',$get_faq['faq_data'])?></textarea>
                    <?php echo form_error('faq_data')?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                        Update
                    </button>
                    <a href="<?php echo base_url('admin/manage_faq') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
           
        </div>
    </div>
</div>
</form>




<?php include_once'inc/footer.php';?>