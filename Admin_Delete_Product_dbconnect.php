<?php 
$p_id=$_GET['p_id']; 
$con=mysqli_connect("localhost","root","","project"); 
$sql="DELETE from product_details where p_id='".$p_id."'"; 
$r=mysqli_query($con,$sql); 
if($r>0) 
{ 
 echo "Product Details are deleted Successfully"; 
} 
else 
 { 
 echo "Product Details are not deleted Successfully"; 
} 
?>