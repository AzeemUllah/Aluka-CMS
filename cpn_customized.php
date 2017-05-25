<?php
class components_customized
{
    //for lannding page
    
	
	function feature($id,$conn)
    {
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_feature where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='features'>
					<div class='row'>";
						
		$result2 = $obj->read_db_single_row("select * from cpn_feature_tiles where cpn_feature_id = '" . $row['id'] . "'", $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
						echo "
						<div class='col-md-".$row['col_md']."'>
							<div class='info'>
								<div class='icon ".$row2['color_code']."'>
									<i class='material-icons'>".$row2['iconName']."</i>
								</div>
								<h4 class='info-title'>".$row2['heading']."</h4>
								<p>".$row2['subText']."</p>
							</div>
						</div>";
		}
						
						echo "
	                </div>
				
</div>
";
		
		
		}
	}

function team($id,$conn)
    {
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_team where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
	

	echo "
				<div class='team'>
					<div class='row'>
					
					";
					
					$obj    = new db();
        $result2 = $obj->read_db_single_row("select * from cpn_team_cards where cpn_team_id = '" . $row['id'] . "'", $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
	
					echo "	<div class='col-md-".$row['col_md_image']."'>
							<div class='card card-profile card-plain'>
								<div class='col-md-5'>
									<div class='card-image'>
										<a href='".$row2['profileLink']."'>
											<img class='img' src='".$row2['imageLink']."' />
										</a>
									</div>
								</div>
								<div class='col-md-".$row['col_md_content']."'>
									<div class='content'>
										<h4 class='card-title'>".$row2['name']."</h4>
										<h6 class='category text-muted'>".$row2['tittle']."</h6>

										<p class='card-description'>
											".$row2['message']."
										</p>

										<div class='footer'>
											<a href='".$row2['twitterLink']."' class='btn btn-just-icon btn-simple btn-twitter'><i class='fa fa-twitter'></i></a>
											<a href='".$row2['facebookLink']."' class='btn btn-just-icon btn-simple btn-facebook'><i class='fa fa-facebook-square'></i></a>
											<a href='".$row2['googleLink']."' class='btn btn-just-icon btn-simple btn-google'><i class='fa fa-google'></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
	";					
		}			
		echo "				</div>
				</div>";

		}
	
	}

	
	
	
	
	


}
?> 