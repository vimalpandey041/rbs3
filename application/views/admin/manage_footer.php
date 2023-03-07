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
<form action="<?php echo base_url('admin/manage_footer') ?>" method="post" >
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-stripped">
                    <tr>
                        <th>Sr.no.</th>
                        <th>logo</th>
                        <th>Edit</th>
                    </tr>
                    <tr>
                        <td> <?php echo $get_manage_footer['uid'] ?> </td>
                        <td> <img src="<?php echo base_url('uploads/img/').$get_manage_footer['footer_image'] ?>" height="100px" width="100px" alt=""> </td>
                        <td><a href="<?php echo base_url('admin/edit_footer_image')?>" class="btn btn-primary">Edit</a></td>
                        
                        
                    </tr>
                </table>
            <div class="form-group">
                    <label >College Name</label>
                    <input type="text" name="name" placeholder="Enter the footer " value="<?php echo set_value('name',$get_manage_footer['name'])?>" class="form-control"  >
                    <?php echo form_error('name')?>
                </div>
            <div class="form-group">
                    <label >contact number</label>
                    <input type="number" name="number" placeholder="Enter the footer " value="<?php echo set_value('number',$get_manage_footer['number'])?>" class="form-control"  >
                    <?php echo form_error('number')?>
                </div>
            <div class="form-group">
                    <label >Mail id</label>
                    <input type="email" name="email" placeholder="Enter the footer " value="<?php echo set_value('email',$get_manage_footer['email'])?>" class="form-control"  >
                    <?php echo form_error('email')?>
                </div>
            <div class="form-group">
                    <label >facebook Id</label>
                    <input type="text" name="facebook" placeholder="Enter the footer " value="<?php echo set_value('facebook',$get_manage_footer['facebook'])?>" class="form-control"  >
                    <?php echo form_error('facebook')?>
                </div>
                <div class="form-group">
                    <label >Twitter id</label>
                    <input type="text" name="twitter" placeholder="Enter the footer " value="<?php echo set_value('twitter',$get_manage_footer['twitter'])?>" class="form-control"  >
                    <?php echo form_error('twitter')?>
                </div>
            <div class="form-group">
                    <label >Instagram</label>
                    <input type="text" name="instagram" placeholder="Enter the footer " value="<?php echo set_value('instagram',$get_manage_footer['instagram'])?>" class="form-control"  >
                    <?php echo form_error('instagram')?>
                </div>
            <div class="form-group">
                    <label >Linkedin id</label>
                    <input type="text" name="linkedin" placeholder="Enter the footer " value="<?php echo set_value('linkedin',$get_manage_footer['linkedin'])?>" class="form-control"  >
                    <?php echo form_error('linkedin')?>
                </div>
           
            <div class="form-group">
                    <label >Block 1 Heading</label>
                    <input type="text" name="block_1_heading" placeholder="Enter the footer " value="<?php echo set_value('block_1_heading',$get_manage_footer['block_1_heading'])?>" class="form-control"  >
                    <?php echo form_error('block_1_heading')?>
                </div>
           
                <table class="table table-stripped">
                    <tr>
                        <th>Sr.no.</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
            <?php foreach($display_footer_block_1 as $adata) {
            ?>
                    <tr>
                        <td> <?php echo $adata['uid'] ?> </td>
                        <td> <?php echo $adata['footer_block_1_name'] ?> </td>
                        <td> <?php echo $adata['footer_block_1_url'] ?> </td>
                        <td><a href="<?php echo base_url('admin/edit_footer_block_1/').$adata['uid'] ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="<?php echo base_url('admin/delete_footer_block_1/').$adata['uid'] ?>" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
            <?php } ?>
                </table>
                <div class="form-group">
                    <label >Block 2 Heading</label>
                    <input type="text" name="block_2_heading" placeholder="Enter the footer " value="<?php echo set_value('block_2_heading',$get_manage_footer['block_2_heading'])?>" class="form-control"  >
                    <?php echo form_error('block_2_heading')?>
                </div>
                <table class="table table-stripped">
                    <tr>
                        <th>Sr.no.</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
            <?php foreach($display_footer_block_2 as $adata) {
            ?>
                    <tr>
                        <td> <?php echo $adata['uid'] ?> </td>
                        <td> <?php echo $adata['footer_block_2_name'] ?> </td>
                        <td> <?php echo $adata['footer_block_2_url'] ?> </td>
                        <td><a href="<?php echo base_url('admin/edit_footer_block_2/').$adata['uid'] ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="<?php echo base_url('admin/delete_footer_block_2/').$adata['uid'] ?>" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
            <?php } ?>
                </table>
                <div class="form-group">
                    <button class="btn btn-primary">
                     Update
                    </button>
                    <a href="<?php echo base_url('admin/manage_footer') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
            </div>
        </div>+
    </div>
</form>

<?php include_once'inc/footer.php';?>