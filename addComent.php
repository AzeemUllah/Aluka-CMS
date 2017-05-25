<?php 
	include 'cls_db.php';
	include 'sup_index.php';
	include 'cnp_all.php';
	$obj= new db();
	$conn = $obj->create_connection("localhost","root","","marocms");
	
	$sql = "INSERT INTO cpn_comentbox_coments (commenterName,email, coment, coment_box_id)
			VALUES ('".$_GET['name']."','".$_GET['email']."', '".$_GET['coment']."',  '".$_GET['coment_box_id']."')";

	$conn->query($sql);
    
	
	$obj = new components();
	echo $obj->coment_box($_GET['coment_box_id'],$conn);


?>