<html> 
<body> 
<form action="Admin_marked_customer.php" method="post" enctype="multipart/form-data"> 
<div style="width:200px;margin-left:300px;display:inline-block;"> 
<h2></h2> 
<?php 
$con=mysqli_connect("localhost","root","","project"); 
$sql="SELECT * from customer_details"; 
$r=mysqli_query($con,$sql); 
?> 
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th colspan="8"><h3><center>View Customer Details</center></h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr class="active"> 
 <td><b>Customer Name</b></td> 
 <td><b>Mobile Number</b></td> 
 <td><b>E-Mail</b></td> 
 <td><b>Password</b></td> 
 <td><b>Mark the Customer</b></td> 
 
 </tr> 
 <?php 
while($row=mysqli_fetch_assoc($r)) 
{ 
 ?> 
 <tr class="active"> 
 <td><?php echo $row['cust_name'];?></td> 
 <td><?php echo $row['mob_number'];?></td> 
 <td><?php echo $row['e_mail'];?></td> 
 <td><?php echo $row['password'];?></td> 
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
</div> 
</body> 
</html> 