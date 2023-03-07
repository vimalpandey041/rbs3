<?php include_once'inc/header.php';?>
<div class="container">
    <div class="row">
        <div class="col">
           <div class="card">
            <div class="card-header">
                <h3> Manage Important Persons</h3>
            </div>
            <div class="card-body">
            <table class="table">
                <tr>
                    <th>Sr. No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Post</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach($display_person_data  as $data){?>
                <tr>
                    <td><?php echo $data['uid'] ?></td>
                    <td><div class="container">
                        <div class="row flex flex-column text-center">
                            <div class="col">
                            <img src="<?php echo base_url('uploads/img/important_persons/').$data['person_image'] ?>" height="90px" class="rounded-circle " alt="">
                            </div>
                            <div class="col my-3">
                            <a href="<?php echo base_url('admin/edit_person_image/').$data['uid'] ?>" class="btn btn-success " >edit</a>
                            </div>
                        </div>
                    </div></td>
                    <td><?php echo $data['person_name'] ?></td>
                    <td><?php echo $data['person_post'] ?></td>
                    <td><a href="<?php echo base_url('admin/edit_person/').$data['uid'] ?>" class="btn btn-primary " >Edit</a></td>
                    <td><a href="<?php echo base_url('admin/delete_person/').$data['uid'] ?>" class="btn btn-danger " >Delete</a></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <div class="card-footer"></div>
           </div>
        </div>
    </div>
</div>
<?php include_once'inc/footer.php';?>