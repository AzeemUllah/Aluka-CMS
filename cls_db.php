<?php
	class db{
		
		var $servername;
		var $username = "";
		var $password = "";
		var $dbname = "";
		var $conn = "";
		
		function create_connection($servername,$username,$password,$dbname){ 				
			
			$this->servername = $servername;
			$this->username = $username;
			$this->password = $password;
			$this->dbname = $dbname;
			
			$this->conn = new mysqli($servername, $username, $password, $dbname);
			
			
			if ($this->conn->connect_error)
				die("Connection failed: " . $conn->connect_error);
			else
				return $this->conn;
		}
		
		function read_db_full_table($colums,$tableName,$conn){
			$sql = "SELECT ". $colums ." FROM ". $tableName;
			$result = $conn->query($sql);
			if (!($result->num_rows > 0))
				$result = "0 Rows Selected!";
			return $result;
		}
		
		function read_db_freedom_query($query,$conn){
			$result = $conn->query($query);
			if ((empty($result)))
				$result = "0 Rows Selected!";
			return $result;
		}
		
		function read_db_single_row($query,$conn){
			return mysqli_query($conn,$query);
			// returns result
		}
		
		function get_row_from_rdbsr($result){
			return mysqli_fetch_assoc($result);
		}
		
		function get_col_from_rdbsr($result, $column){ //get single colum of single row - like for tittle name from metadata table
			$col = mysqli_fetch_assoc($result);
			return $col[$column];
			
		}
		
		function close_conn($conn){
			$conn->close();
		}
		
		function dbug_display_result($result){
			while($row = $result->fetch_assoc()) {
				echo "ABC";
			}
		}
		
		function update_single_row_item($table_name,$column, $new_value, $id, $conn){
			$sql = "UPDATE ".$table_name." SET ". $column ." ='". $new_value ."' WHERE id='" . $id ."'";
			if ($conn->query($sql) === TRUE) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . $conn->error;
			}
			
		}
		
		function check_row_existance($tableName,$column,$validationKey, $conn){ //to check if a row exists or not used for checking components existance usually
			$sql = "SELECT * FROM ". $tableName . " where ". $column . " = '".$validationKey."'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0)
				return true;
			else
				return false;
			
		}
		
		function insert($sql, $conn){
			if ($conn->query($sql) === TRUE) {
				return "1";
			} else {
				return $conn->error;
			}
		}
		
		
	}



	/*$obj= new db();
	$conn = $obj->create_connection("localhost","root","","marocms");
	//echo $obj->dbug_display_result($obj->read_db_freedom_query("select * from users",$conn));
	//echo $obj->get_col_from_rdbsr($obj->read_db_single_row("select * from users where id=1",$conn),"user_name");
	echo $obj->check_row_existance("landing_page","lp_component_name","meta_data",$conn);
*/
?>