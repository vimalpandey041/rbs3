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
<form action="<?php echo base_url('admin/manage_news_events') ?>" method="post" >
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="form-group">
                    <label >News & Events Heading</label>
                    <input type="text" name="news_events_heading" placeholder="Enter the News & Events " value="<?php echo set_value('news_events_heading',$get_heading['news_events_heading'])?>" class="form-control"  >
                    <?php echo form_error('news_events_heading')?>
                </div>
                <table class="table table-stripped">
                    <tr>
                        <th>Sr.no.</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
            <?php foreach($display_news_events as $ndata) {
            ?>
                    <tr>
                        <td> <?php echo $ndata['uid'] ?> </td>
                        <td> <?php echo $ndata['news_events_name'] ?> </td>
                        <td> <?php echo $ndata['news_events_url'] ?> </td>
                        <td><a href="<?php echo base_url('admin/edit_news_events/').$ndata['uid'] ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="<?php echo base_url('admin/delete_news_events/').$ndata['uid'] ?>" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
            <?php } ?>
                </table>
                <div class="form-group">
                    <button class="btn btn-primary">
                     Update
                    </button>
                    <a href="<?php echo base_url('admin/manage_news_events') ?>"class="btn btn-secondary" >Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include_once'inc/footer.php';?>