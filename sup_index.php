<?php
	
	
	class support_index_page{
		
		
		function isComponent($component_name,$conn){
			$obj= new db();
			if($obj->check_row_existance("landing_page","lp_component_name",$component_name, $conn))
				return true;
			else
				return false;
		}
		
		
	}


?>