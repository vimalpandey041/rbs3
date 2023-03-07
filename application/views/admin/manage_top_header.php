<?php include_once'inc/header.php'; ?>
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
<form action="<?php echo base_url('manage_top_header')?>" method="post">
<div class="container">
    <div class="row">
        <div class="col">
        <div class="form-group">
            <label >Mobile Number</label>
            <input type="text" name="number" class="form-control" placeholder="Enter Mobile Number" value="<?php echo set_value('number',$top_header_data['number'])?>">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email Id " value="<?php echo set_value('email',$top_header_data['email'])?>">
        </div>
        <div class="form-group">
            <label >Facebook Url</label>
            <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook Url" value="<?php echo set_value('facebook',$top_header_data['facebook'])?>">
        </div>
        <div class="form-group">
            <label >Twitter Url</label>
            <input type="text" name="twitter" class="form-control" placeholder="Enter Twitter Url" value="<?php echo set_value('twitter',$top_header_data['twitter'])?>">
        </div>
        <div class="form-group">
            <label >Instagram Url</label>
            <input type="text" name="instagram" class="form-control" placeholder="Enter Instagram Url" value="<?php echo set_value('instagram',$top_header_data['instagram'])?>">
        </div>
        <div class="form-group">
            <label >Linkedin Url</label>
            <input type="text" name="linkedin" class="form-control" placeholder="Enter Linkedin Url" value="<?php echo set_value('linkedin',$top_header_data['linkedin'])?>">
        </div>
        <div class="form-group">
           <button class="btn btn-primary">Update Top Header</button>
           <a href="<?php echo base_url('admin')?>" class="btn btn-danger">Delete</a>
        </div>
       
        </div>
    </div>
</div>
</form>

<?php include_once'inc/footer.php';?>