<html> 
<body> 
<form action="Admin_marked_product.php" method="post" enctype="multipart/form-data"> 
<div style="width:200px;margin-left:190px;display:inline-block;"> 
<h2></h2> 
<?php 
$con=mysqli_connect("localhost","root","","project"); 
$sql="SELECT * from product_details"; 
$r=mysqli_query($con,$sql); 
?>
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th colspan="8"><h3><center>View Product Details</center></h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 
 <?php 
 while($row=mysqli_fetch_assoc($r)) 
 { 
 ?> 
 <tr> 
 <td><b>Product ID</b></td> 
 <td><b>Product Name</b></td> 
 <td><b>Product Description</b></td> 
 <td><b>Stock</b></td> 
 <td><b>Price</b></td> 
 <td><b>Product Type</b></td> 
 <td><b>Admin Marked</b></td> 
 </tr> 
 <tr> 
 <td><?php echo $row['p_id'];?></td> 
 <td><?php echo $row['p_name'];?></td> 
 <td><?php echo $row['p_description'];?></td> 
 <td><?php echo $row['stock'];?></td> 
 <td><?php echo $row['price'];?></td> 
 <td><?php echo $row['p_type'];?></td> 
 <td><input type="checkbox"></td> 
 </tr> 
 <?php 
} ?> 
 <tr class="active" align="center"> 
 <td colspan="8"> 
 <button type="SUBMIT" class="btn btn-primary">SUBMIT</button></td> 
 </tr> 
 </tbody> 
 </table> 
</form> 
</body> 
</html>