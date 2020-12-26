<?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['btn_save']))
{
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$email = $_POST['email_name'];
	$add= $_POST['address'];
	$phn= $_POST['phone'];
	$salary= $_POST['salary'];
	$jdate= $_POST['join_date'];
	$penalty= $_POST['penalty'];
	
	
	
	$res = $con->insert($fname,$lname,$email,$add,$phn,$salary,$jdate,$penalty);
	if($res)
	{
		?>
		<script>
		alert('Record inserted...');
        window.location='http://localhost/hotel/admin/demo/view.php'
        </script>
		<?php

	}
	else
	{
		?>
		<script>
		alert('error inserting record...');
        window.location='http://localhost/hotel/admin/demo/view.php'
        </script>
		<?php
	}
}
// data insert code ends here.

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Staff </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Add Staff </label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
	
	<tr>
    <th colspan="5">  <a href="http://localhost/hotel/admin/settings.php"><img src="b_back.jpg" alt="back" height="42" width="42"/></a></th>
    </tr>
	
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="email" name="email_name" placeholder="email" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="address" required /></td>
    </tr>
	<tr>
    <td><input type="number" name="phone" placeholder="phone number" required /></td>
    </tr>
	<tr>
    <td><input type="number" name="salary" placeholder="salary" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="join_date" placeholder="joining date" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="penalty" placeholder="penalty"/></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn_save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>