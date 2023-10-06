<?php 
$p_id=$_GET['p_id']; 
$p_name=$_GET['p_name']; 
$p_description=$_GET['p_description']; 
$stock=$_GET['stock']; 
$price=$_GET['price']; 
$p_type=$_GET['p_type']; 
$con=mysqli_connect("localhost","root","","project"); 
$sql="UPDATE product_detail set p_name='".$p_name."', 
p_description='".$p_description."',stock=".$stock.",price=".$price.", 
p_type='".$p_type."' where p_id='".$p_id."'"; 
$r=mysqli_query($con,$sql); 
if($r>=0) 
{ 
 echo "Product Updation is Successful"; 
} 
else 
 { 
 echo "Product Updation is not Successful"; 
} 
?> 