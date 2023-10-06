<html> 
<body> 
<form action="Admin_Delete_Product.php" method="get"> 
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th colspan="2"><h3><center>Delete a Product by ID</center></h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr class="active"> 
 <td><b>Input Product ID</b></td> 
 <td><b><input type="text" name="p_id" /></b></td> 
 </tr> 
 <tr class="active" align="center"> 
 <td colspan="2"><input type="submit" value="Submit"></td> 
 </tr> 
 </tbody> 
 </table> 
 </form> 
<?php 
 if(isset($_GET['p_id'])) 
 { 
 $p_id=$_GET['p_id']; 
$con=mysqli_connect("localhost","root","rgukt14","project"); 
$sql="SELECT * from product_details where p_id='".$p_id."'"; 
$r=mysqli_query($con,$sql); 
if($row=mysqli_fetch_assoc($r)) 
{ 
 ?> 
 <form action="Admin_Delete_Product_dbconnect.php" method="get"> 
 <table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th colspan="3"><h3><center>Delete a Product</center></h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr class="active"> 
 <td><b>Product Details</b></td> 
 <td><b>Product values</b></td> 
 </tr> 
 <tr> 
 <td>Name</td> 
 <td><?php echo $row['p_name'];?></td> 
 
 </tr> 
 <tr> 
 <td>Product Description</td> 
 <td><?php echo $row['p_description'];?></td> 
 
 </tr> 
 <tr> 
 <td>Stock</td> 
 <td><?php echo $row['stock'];?></td> 
 </tr> 
 <tr> 
 <td>Product type/category</td> 
 <td><?php echo $row['p_type'];?></td> 
 </tr> 
 <tr align="center"> 
 <td colspan="3"> 
 <input type="hidden" name="p_id" value="<?php echo $p_id; ?>" /> 
 <button type="submit" class="btn btn-danger">DELETE</button></td> 
 </tr> 
 </tbody> 
 </table> 
 </form> 
 <?php 
} 
} 
?> 
</body> 
</html>