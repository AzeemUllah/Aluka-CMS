<?php
	class footer{
		
		function get_footer($page_name,$conn){
			
			$obj= new db();
			
			
			$toReturn = "
				
			<footer class='footer'>
				<div class='container'>
			
			";
			
			
			if($this->get_row_from_fdr($this->footer_data_retrival($page_name,$conn),"footer_navigation_link") == 'Y'){
				$toReturn .= $this->navigation_links($this->get_row_from_fdr($this->footer_data_retrival($page_name,$conn),"id"), $conn);
			}
			
			
			$toReturn = $toReturn . "
			
			<div class='copyright pull-right'>
                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class='fa fa-heart heart'></i> by Azeem Ullah
            </div>
			</div>
			</footer>
			";
			
			return $toReturn;
		}
		
		function navigation_links($id, $conn){
			$toReturn = "<nav class='pull-left'>
                <ul>";
				
			$obj= new db();
			$query = "select * from footer_navigation_link fnl where footer_id = '" . $id. "'";
			$result = $obj->read_db_freedom_query($query,$conn);
			if(!($result=="0 Rows Selected!")){
				
				while($row = $result->fetch_assoc()) {
					$toReturn .= "<li>
                        <a href='".$row['fnl_address']."'>
							".$row['fnl_name']."
                        </a>
                    </li>
					";
				}
			}
				
				
			$toReturn = $toReturn . "    </ul>
            </nav>";
			
			return $toReturn;
		}
		
		function footer_data_retrival($page_name,$conn){
			$obj= new db();
			$result = $obj->get_row_from_rdbsr($obj->read_db_single_row("select * from ". $page_name ." pn, footer h where pn.lp_component_name='footer' and pn.lp_component_id = h.id",$conn));
			if(!(empty($result)))
				return $result;
			else
				return "nothing found!";
			
			
		}
		
		function get_row_from_fdr($result,$column){
			if(!(empty($result[$column])))
				return $result[$column];
			else{ 
				return $column . " not set!";
				
			}
		}
	}
	
	
	
?>