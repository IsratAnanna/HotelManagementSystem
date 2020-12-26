<?php
include_once 'dbMySql.php';
$con = new DB_con();
if(isset($_GET['delete_id']))
{
	$id=$_GET['delete_id'];
	$res=$con->deleteUsingId($id);
	if($res)
	{
		?>
		<script>
		alert('Record Deleted ...')
        window.location='http://localhost/hotel/admin/demo/view.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Record cant Deleted !!!')
        window.location='http://localhost/hotel/admin/demo/view.php'
        </script>
		<?php
	}
}
?>