<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', "411");

class DB_con
{	
	public $conn;
	
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_connect_error());
	}
	
	public function insert($fname,$lname,$email,$add,$phn,$salary,$jdate,$penalty)
	{	
		$sql = "INSERT into users( first_name,last_name,email,address,phone,salary,join_date,penalty) 
		VALUES('$fname','$lname','$email','$add','$phn','$salary','$jdate','$penalty')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}
	
	public function select()
	{	
		$sql = "SELECT * FROM users";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	
	public function selectUsingId($id)
	{	
		$sql = "SELECT * FROM users WHERE user_id=".$id;
		$res = mysqli_query($this->conn, $sql);
		$result = mysqli_fetch_array($res);
		return $result;
	}
	
	
	public function deleteUsingId($id)
	{
		$sql = "DELETE FROM users WHERE user_id=".$id;
		if(mysqli_query($this->conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	public function update($id, $fname, $lname, $email,$add,$phn,$salary,$jdate,$penalty)
	{	
		$sql = "UPDATE users SET first_name='$fname', last_name='$lname', email='$email',
		        address='$add',phone='$phn',salary='$salary',join_date='$jdate',penalty='$penalty' WHERE user_id=".$id;
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	
}

?>