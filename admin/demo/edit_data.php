<?php
include_once 'dbMySql.php';
$con = new DB_con();
$table = "users";
// data insert code starts here.
if(isset($_GET['edit_id']))
{	
	$id = $_GET['edit_id'];
	$result = $con->selectUsingId($id);
}
// data update code starts here.
if(isset($_POST['btn_update']))
{
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$email = $_POST['email_name'];
	$add= $_POST['address'];
	$phn= $_POST['phone'];
	$salary= $_POST['salary'];
	$jdate= $_POST['join_date'];
	$penalty= $_POST['penalty'];
	
	$id=$_GET['edit_id'];
	$res=$con->update($id,$fname,$lname,$email,$add,$phn,$salary,$jdate,$penalty);
	if($res)
	{
		?>
		<script>
		alert('Record updated...');
        window.location='http://localhost/hotel/admin/demo/view.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error updating record...');
        window.location='http://localhost/hotel/admin/demo/view.php'
        </script>
		<?php
	}
}
// data update code ends here.

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Royal Hotel</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<?php
include_once 'header.php';
?>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $result['first_name']; ?>"  /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $result['last_name']; ?>" /></td>
    </tr>
    <tr>
    <td><input type="text" name="email_name" placeholder="email" value="<?php echo $result['email']; ?>" /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="address" value="<?php echo $result['address']; ?>" /></td>
    </tr>
	<tr>
    <td><input type="number" name="phone" placeholder="phone number" value="<?php echo $result['phone']; ?>" /></td>
    </tr>
	<tr>
    <td><input type="number" name="salary" placeholder="salary" value="<?php echo $result['salary']; ?>" /></td>
    </tr>
	<tr>
    <td><input type="date" name="join_date" placeholder="joining date" value="<?php echo $result['join_date']; ?>" /></td>
    </tr>
	<tr>
    <td><input type="text" name="penalty" placeholder="penalty" value="<?php echo $result['penalty']; ?>"/></td>
    </tr>
	
	
    <tr>
    <td>
    <button type="submit" name="btn_update"><strong>UPDATE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

<?php
include_once 'footer.php';
?>

</center>
</body>
</html>