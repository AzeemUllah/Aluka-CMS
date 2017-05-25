<?php 

	class metapage{
		
		function get_page_tittle($id,$conn){
			$obj    = new db();
			$result = $obj->read_db_single_row("select * from cpn_meta_data where id = '" . $id . "'", $conn);
			while ($row = mysqli_fetch_assoc($result)) {
				return "<title>".$row['page_tittle']."</title>";
			}
			
			return "<title> Title not set! </title>";
		}
		
	}

?>