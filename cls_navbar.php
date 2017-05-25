<?php

	class navigation_bar{
		
		var $company_name;
		var $company_link;
		var $nb_navigation_link;
		
		function get_nb_company_details($id,$conn){
			$obj= new db();
			$result = $obj->get_row_from_rdbsr($obj->read_db_single_row("select * from navigation_bar where id = '".$id."'",$conn));
			if(!(empty($result)))
				return $result;
			else
				return "nothing found!";
		}
		
		function get_row_from_gncb($result,$column){
			if(!(empty($result[$column])))
				return $result[$column];
			else 
				return $column . " not set!";
		}
		
		function get_nav_bar_component($page_name,$conn){
			$toReturn =  "
				<nav class='navbar navbar-danger navbar-transparent navbar-absolute'>
					<div class='container'>
						
						<div class='navbar-header'>
							<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navigation-example'>
								<span class='sr-only'>Toggle navigation</span>
								<span class='icon-bar'></span>
								<span class='icon-bar'></span>
								<span class='icon-bar'></span>
							</button>
							<a class='navbar-brand' href='".
							$this->get_row_from_gncb($this->get_nb_company_details($id,$conn),"nb_company_link")
							."'>".
							$this->get_row_from_gncb($this->get_nb_company_details($id,$conn),"nb_company_name")
							."</a>
						</div>";
			
			if($this->get_row_from_gncb($this->get_nb_company_details($id,$conn),"nb_navigation_link") == 'Y')
				$toReturn = $toReturn ." ".  $this->get_nav_bar_links($this->get_row_from_gncb($this->get_nb_company_details($id,$conn),"id"),$conn);
		
			
			$toReturn = $toReturn . "
					</div>
				</nav>
		";
			
		return $toReturn;
		
		}
		
		function get_nav_bar_links($nb_id,$conn){
			$obj= new db();
			$query = "select * from simple_navigation_link snl where snl_nb_id = '" . $nb_id. "'";
			$result = $obj->read_db_freedom_query($query,$conn);
			if(!($result=="0 Rows Selected!")){
				$toReturn = "
				<div class='collapse navbar-collapse' id='navigation-example'>
        		<ul class='nav navbar-nav navbar-right'>";
				
				while($row = $result->fetch_assoc()) {
					
					if($row['snl_dropdown']=='N'){
					$toReturn = $toReturn . "<li>
						<a href='".$row['snl_link']."'>
							<i class='material-icons'>".$row['snl_link_icon']."</i>".$row['snl_name']."
						</a>
					</li>";
					}
					else if($row['snl_dropdown']=='Y'){
						$toReturn = $toReturn . "<li class='dropdown'>
							<a href='".$row['snl_link']."' class='dropdown-toggle' data-toggle='dropdown'>
								<i class='material-icons'>".$row['snl_link_icon']."</i>".$row['snl_name']."
								<b class='caret'></b>
							</a>
							<ul class='dropdown-menu dropdown-with-icons'>
						";
						$toReturn = $toReturn . $this->navigation_dropdown($row['id'],$conn);
						$toReturn = $toReturn . "</ul></li>";
					}
				}
				
				$toReturn = $toReturn . "
				</ul>
				</div>
				";
				return $toReturn;
			}
			
		}
		
		function navigation_dropdown($id,$conn){
			$obj= new db();
			$toReturn=' ';
			$query = "select * from navigation_dropdown nd where nd_snl_id = '" . $id. "'";
			$result = $obj->read_db_freedom_query($query,$conn);
			if(!($result=="0 Rows Selected!")){
				while($row = $result->fetch_assoc()) {
					$toReturn = $toReturn . "<li>
								<a href='".$row['nd_link_address']."'>
									<i class='material-icons'>".$row['nd_link_icon']."</i> ".$row['nd_name']."
								</a>
								</li>
								";
				}
			}
			return $toReturn;
		}
		
		function get_company_name(){
			return $this->company_name;
		}
		
		function get_company_link(){
			return $this->company_link;
		}
		
		function get_nb_navigation_link(){
			return $this->nb_navigation_link;
		}
		
		function set_nb_navigation_link($value, $conn){
			
		}
		
	}
		

		
		