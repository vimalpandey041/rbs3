<?php
//include_once'header.php';
include_once'../classess/Crud.php';
$crud = new Crud();


if(isset($_GET['field']) and $_GET['field']=="category")
{
	$cid = $_GET['cid'];
	$get_image_data = $crud->getData(["table"=>"category","where"=>"cid='$cid'"]);
	$image = $get_image_data[0]['cimage'];
	$delete_image = unlink("uploads/cimage/".$image);
	$delete_data = $crud->execute("DELETE FROM category WHERE cid='$cid'");
	if($delete_image or $delete_data){
		
		header("Location: manage_category.php?delete=true");
	}
	else{
		header("Location: manage_category.php?delete=false");
	}

	
}
elseif(isset($_GET['field']) and $_GET['field']=="slider")
{
	$sid = $_GET['sid'];
	$get_image_data = $crud->getData(["table"=>"sliders","where"=>"sid='$sid'"]);
	$image = $get_image_data[0]['simage'];
	$delete_image = unlink("uploads/simage/".$image);
	$delete_data = $crud->execute("DELETE FROM sliders WHERE sid='$sid'");
	if($delete_image and $delete_data){
		
		header("Location: manage_sliders.php?delete=true");
	}
	else{
		header("Location: manage_sliders.php?delete=false");
	}

	
}



 ?>


<?php include_once'footer.php'; ?>