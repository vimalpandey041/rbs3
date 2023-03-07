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

<form action="<?php echo base_url('admin/manage_faq') ?>" method="post" >
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="form-group">
                    <label >FAQ  Main Heading</label>
                    <input type="text" name="faq_heading" placeholder="Enter the announcement " value="<?php echo set_value('faq_heading',$get_heading['faq_heading'])?>" class="form-control"  >
                    <?php echo form_error('faq_heading')?>
                </div>
                <table class="table table-stripped">
                    <tr>
                        <th>Sr.no.</th>
                        <th>FAQ Heading</th>
                        <th>FAQ Data</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
            <?php foreach($display_faq as $fdata) { 
            ?>
                    <tr>
                        <td> <?php echo $fdata['uid'] ?> </td>
                        <td> <?php echo $fdata['faq_heading'] ?> </td>
                        <td> <?php echo $fdata['faq_data'] ?> </td>
                        <td><a href="<?php echo base_url('admin/edit_faq/').$fdata['uid'] ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="<?php echo base_url('admin/delete_faq/').$fdata['uid'] ?>" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
            <?php } ?>
                </table>
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