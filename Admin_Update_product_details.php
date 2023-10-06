<html> 
<body> 
<form action="Admin_Update_Product_Details.php" method="get"> 
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th colspan="2"><h3><center>Product Details by ID</center></h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr> 
 <td><b>Input Product ID</b></td> 
 <td><b><input type="text" name="p_id" /></b></td> 
 </tr> 
 <tr align="center"> 
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
 <form action="Admin_Update_Product_Details_dbconnect.php" method="get"> 
 <table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th colspan="3"><h3><center>Update Product Details</center></h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr> 
 <td><b>Product Details</b></td> 
 <td><b>Existing value</b></td> 
 <td><b>New Value</b></td> 
 </tr> 
 <tr> 
 <td>Name</td> 
 <td><?php echo $row['p_name'];?></td> 
 <td><input type="text" name="p_name"> 
 <input type="hidden" name="p_id" value="<?php echo $p_id;?>"> 
 </td> 
 </tr> 
 <tr> 
 <td>Product Description</td> 
 <td><?php echo $row['p_description'];?></td> 
 <td><input type="text" name="p_description"></td> 
 </tr> 
 <tr> 
 <td>Stock</td> 
 <td><?php echo $row['stock'];?></td> 
 <td><input type="text" name="stock" /></td> 
 </tr> 
 <tr> 
 <td>Product Price</td> 
 <td><?php echo $row['price'];?></td> 
 <td><input type="text" name="price" /></td> 
 </tr> 
 <tr> 
 <td>Product type/category</td> 
 <td><?php echo $row['p_type'];?></td> 
 <td><input type="text" name="p_type" /></td> 
 </tr> 
 <tr align="center"> 
 <td colspan="3"><input type="submit" value="UPDATE" /></td> 
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