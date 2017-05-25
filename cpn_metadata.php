<?php
	
	class metadata{
		
		function get_tittle($page_name,$conn){ //what page are u standing on
			$obj= new db();
			$temp = $obj->get_col_from_rdbsr($obj->read_db_single_row("select * from ". $page_name ." pn, meta_data md where pn.lp_component_name='meta_data' and pn.lp_component_id = md.id",$conn),"md_tittle",$conn);
			if(empty($temp))
				return "<title> Title not set! </title>";
			else
				return "<title> ". $temp ." </title>";
		}
		
		function get_tittle_id($page_name,$conn){ //what page are u standing on
			$obj= new db();
			return $obj->get_col_from_rdbsr($obj->read_db_single_row("select * from ". $page_name ." pn, meta_data md where pn.lp_component_name='meta_data' and pn.lp_component_id = md.id",$conn),"id");
		}
		
		
		function set_tittle($page_name, $new_tittle,$conn){					
			$obj= new db();
			$obj->update_single_row_item("meta_data","md_tittle", $new_tittle, $this->get_tittle_id($page_name,$conn),$conn);
			echo "done";
		}
		
	}
	/*
	$obj= new db();
	$conn = $obj->create_connection("localhost","root","","marocms");
	$obj = new metadata();
	$obj->set_tittle("landing_page", "BUMUN 18", $conn);
*/
?>
