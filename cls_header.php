<?php
	class headr{
		
		function create_header($page_name,$conn){
			$obj= new db();
			
			$toReturn = "
				<div class='page-header header-filter' data-parallax='active' style='background-image: url('".$this->get_row_from_ghd($this->get_header_details($page_name,$conn),"header_background_pic")."');'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>
								<h1 class='title'>".$this->get_row_from_ghd($this->get_header_details($page_name,$conn),"header_heading")."</h1>
								<h4>".$this->get_row_from_ghd($this->get_header_details($page_name,$conn),"header_paragraph")."</h4>
								<br />
							</div>
						</div>
					</div>
				</div>
					";
				return $toReturn;
		}
		
		function get_header_details($page_name,$conn){
			$obj= new db();
			$result = $obj->get_row_from_rdbsr($obj->read_db_single_row("select * from ". $page_name ." pn, header h where pn.lp_component_name='header' and pn.lp_component_id = h.id",$conn));
			if(!(empty($result)))
				return $result;
			else
				return "nothing found!";
			
		}
		
		function get_row_from_ghd($result,$column){
			if(!(empty($result[$column])))
				return $result[$column];
			else{ 
				return $column . " not set!";
				
			}
		}
	}
	

?>