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

<form action="<?php echo base_url('admin/manage_about') ?>" method="post">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="from-group">
                <label >First heading</label>
                <input type="text" name="first_heading" placeholder="Enter first heading" class="form-control" value="<?php echo set_value('first_heading',$get_about['first_heading']) ?>" >
                <?php echo form_error('first_heading') ?>
            </div>
            <div class="from-group">
                <label >Second heading</label>
                <input type="text" name="second_heading" placeholder="Enter first heading" class="form-control" value="<?php echo set_value('second_heading',$get_about['second_heading']) ?>" >
                <?php echo form_error('second_heading') ?>
            </div>
            <div class="from-group">
                <label >About Content</label>
               <textarea name="about_data" cols="30" rows="10" class="form-control" ><?php echo set_value('second_heading',$get_about['about_data']) ?></textarea>
                <?php echo form_error('about_data') ?>
            </div>
            <div class="from-group my-3">
                <label >More About Us</label>
                <input type="text" name="about_url" placeholder="Enter first heading" class="form-control" value="<?php echo set_value('about_url',$get_about['about_url']) ?>" >
                <?php echo form_error('about_url') ?>
            </div>
            <div class="form-group">
                    <button class="btn btn-primary">
                     Update
                    </button>
                    <a href="<?php echo base_url('admin') ?>"class="btn btn-secondary" >Cancel</a>
                </div>

        </div>
    </div>
</div>



</form>
<?php include_once'inc/footer.php';?>