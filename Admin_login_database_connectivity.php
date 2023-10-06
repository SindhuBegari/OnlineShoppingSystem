

<?php
$emp_id=$_POST['emp_id'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","project");
$sql="select * from Admin_login
		where emp_id='".$emp_id."' and password='".$password."'";
$r=mysqli_query($con,$sql);
session_start();
if($row=mysqli_fetch_assoc($r))
	{
		
		$_SESSION['admin']=$row;
		header('location:Admin_actions.php');
	}
else
	{
		echo "Error in Login";
	}
?>