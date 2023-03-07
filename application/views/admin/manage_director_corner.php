<?php include_once'inc/header.php';?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php 
            $success = $this->session->userdata('success');
            if($success != ""){
                ?>
                <div class="alert alert-success">
                    <?php echo $success?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<form action="<?php echo base_url('admin/manage_director_corner') ?>" method="post" >
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="form-group">
                    <label >Director's First Heading</label>
                    <input type="text" name="first_heading" placeholder="Enter the First Heading" value="<?php echo set_value('first_heading',$get_manage_director_corner['first_heading'])?>" class="form-control"  >
                    <?php echo form_error('announcement_heading')?>
                </div>
            <div class="form-group">
                    <label >Director's Second Heading</label>
                    <input type="text" name="second_heading" placeholder="Enter the Second Heading " value="<?php echo set_value('second_heading',$get_manage_director_corner['second_heading'])?>" class="form-control"  >
                    <?php echo form_error('announcement_heading')?>
                </div>
                <table class="table">
                    <tr>
                        <th>Sr.no.</th>
                        <th>Image</th>
                        <th>Edit</th>
                    </tr>
                    <tr>
                        <td><?php echo $get_manage_director_corner['uid']?></td>
                        <td><img src="<?php echo base_url('uploads/img/faculty/').$get_manage_director_corner['director_image']?>" height="200px" width="200px" alt=""></td>
                        <td><a href="<?php echo base_url('admin/edit_director') ?>" class="btn btn-primary">Edit</a></td>
                        
                    </tr>
                </table>
            <div class="form-group">
                    <label >Director's  Data</label>
                    <textarea name="director_data"  cols="30" rows="10" class="form-control"><?php echo set_value('director_data',$get_manage_director_corner['director_data'])?></textarea>
                    
            <div class="form-group">
                    <label >Director's Name</label>
                    <input type="text" name="director_name" placeholder="Enter the Director's Name " value="<?php echo set_value('director_name',$get_manage_director_corner['director_name'])?>" class="form-control"  >
                    <?php echo form_error('announcement_heading')?>
            <div class="form-group">
                    <label >Director's Url</label>
                    <input type="text" name="director_url" placeholder="Enter the Url " value="<?php echo set_value('director_url',$get_manage_director_corner['director_url'])?>" class="form-control"  >
                    <?php echo form_error('announcement_heading')?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                     Update
                    </button>
                    <a href="<?php echo base_url('admin/manage_announcement') ?>" class="btn btn-secondary" >Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include_once'inc/footer.php';?>