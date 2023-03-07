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
<form action="<?php echo base_url('admin/add_news_events') ?>" method="post">
<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div class="form-group">
                    <label >News Events Name</label>
                    <input type="text" name="news_events_name" placeholder="Enter the news_events " value="<?php echo set_value('news_events_name')?>" class="form-control"  >
                    <?php echo form_error('news_events_name')?>
                </div>
                <div class="form-group">
                    <label >News Events URL</label>
                    <input type="text" name="news_events_url" placeholder="Enter the news_events url " value="<?php echo set_value('news_events_url')?>" class="form-control"  >
                    <?php echo form_error('news_events_url')?>
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