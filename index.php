<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	
	
	<?php
		include 'cls_db.php';
		$obj= new db();
		$conn = $obj->create_connection("localhost","root","","marocms");
	
		if (empty($_GET['page']) or $_GET['page']=='landing_page') {
			
			$pagetype = 'landing-page';
			$pageName = 'landing_page';
			$pageId = '';
			$pageRaised = '';
			$obj    = new db();
			$result = $obj->read_db_single_row("select * from pages where page_name = '" . $pageName . "'", $conn);
			while ($row = mysqli_fetch_assoc($result)) {
				$pageId = $row['id'];
				if($row['raised'] == 'Y')
					$raised = 'main-raised';
				else
					$raised = '';
			}
		}
		else if (!empty($_GET['page']) or $_GET['page']!='landing_page'){
			
			$pagetype='';
			$pageId ='';
			$pageRaised = '';
			$pageName = $_GET['page'];
			$obj    = new db();
			$result = $obj->read_db_single_row("select * from pages where page_name = '" . $pageName . "'", $conn);
			while ($row = mysqli_fetch_assoc($result)) {
				$pageId = $row['id'];
				$pagetype= $row['page_type'];
				if($row['raised'] == 'Y')
					$raised = 'main-raised';
				else
					$raised = '';
			}
		}
		
		//meta data has seperate php file; seperate table in db;
		
		include 'cpn_meta.php';
		$md = new metapage();
		
		$component_id = '';
		
		$obj    = new db();
		$result = $obj->read_db_single_row("select * from ".$pageName ." where component_name = 'cpn_meta_data'", $conn);
		while ($row = mysqli_fetch_assoc($result)) {
			$component_id = $row['component_id'];
		}
		
		echo $md->get_page_tittle($component_id,$conn);
	?>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<style></style>
	
	<script>
	// Script for coment box
	function addComent(coment_box_id){
     
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("coment_section").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","addComent.php?name="+document.getElementById("name").value+"&email="+document.getElementById("email").value+"&coment="+document.getElementById("coment").value+"&coment_box_id="+coment_box_id,true);
        xmlhttp.send();
}
</script>

	
	
</head>

<body class='<?php echo $pagetype; ?>'>

	<?php
				include 'cnp_all.php';
				$cpn = new components();
				$obj    = new db();
				$result = $obj->read_db_single_row("select * from ".$pageName, $conn);
				while ($row = mysqli_fetch_assoc($result)) {
					if($row['component_name'] == 'navigation_bar_style_three')
						echo $cpn->navigation_bar_style_three($row['component_id'],$conn);
					else if($row['component_name'] == 'page_header')
						echo $cpn->page_header($row['component_id'],$conn);
				}
				
				
				//echo $obj->navigation_bar_style_three("1",$conn);
				//echo $obj->page_header("1",$conn);
		
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="main <?php echo $raised; ?>">
		<div class="container">
	
			<?php 
				//
				$class_methods = get_class_methods('components');
				/*foreach ($class_methods as $method_name) {
									
									echo $method_name . "<br>";
									}
				
				*/
				
				
				//********* COMPONENTS CLASS OBJECT IS NAMED AS $cpn. ***********
				$result = $obj->read_db_single_row("select * from ".$pageName, $conn);
				while ($row = mysqli_fetch_assoc($result)) {
								foreach ($class_methods as $method_name) {
									if($row['component_name'] == $method_name && $row['component_name'] != "page_header" && $row['component_name'] != "navigation_bar_style_one" && $row['component_name'] != "navigation_bar_style_two" &&  $row['component_name'] != "navigation_bar_style_three")
										echo $cpn->$method_name($row['component_id'],$conn);
									}
				
				}
				
				
				
				
				
				
				/*
				
					echo $cpn->get_tittle('1',$conn);
					
					
					
						
						
											echo $cpn->team('1',$conn); // use centre div here no col-md required
											echo $cpn->feature('1',$conn); // use centre div here no col-md required
											echo $cpn->contact_us('1',$conn); // use centre div here no col-md required
											
											
											*/
				?>
				
				
				
				
				<br><br>
				    
				
		        					</div>
				
							</div>
							
							<?php ?>


	
	
<?php

		
?>
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
	<script src="assets/js/jquery.dropdown.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="assets/js/jquery.tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="assets/js/jasny-bootstrap.min.js"></script>

	<!-- Plugin For Google Maps -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>
