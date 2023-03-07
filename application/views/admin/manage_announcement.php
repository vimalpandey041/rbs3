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
<form action="<?php echo base_url('admin/manage_announcement') ?>" method="post" >
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="form-group">
                    <label >Announcement Heading</label>
                    <input type="text" name="announcement_heading" placeholder="Enter the announcement " value="<?php echo set_value('announcement_heading',$get_heading['announcement_heading'])?>" class="form-control"  >
                    <?php echo form_error('announcement_heading')?>
                </div>
                <table class="table table-stripped">
                    <tr>
                        <th>Sr.no.</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
            <?php foreach($display_announcement as $adata) {
            ?>
                    <tr>
                        <td> <?php echo $adata['uid'] ?> </td>
                        <td> <?php echo $adata['announcement_name'] ?> </td>
                        <td> <?php echo $adata['announcement_url'] ?> </td>
                        <td><a href="<?php echo base_url('admin/edit_announcement/').$adata['uid'] ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="<?php echo base_url('admin/delete_announcement/').$adata['uid'] ?>" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
            <?php } ?>
                </table>
                <div class="form-group">
                    <button class="btn btn-primary">
                     Update
                    </button>
                    <a href="<?php echo base_url('admin/manage_announcement') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
            </div>
        </div>+
    </div>
</form>

<?php include_once'inc/footer.php';?>