<?php 
 $p_id=$_POST['p_id']; 
 $p_name=$_POST['p_name']; 
 $p_description=$_POST['p_description']; 
 //$p_image=$_FILES['p_image']; 
 $stock=$_POST['stock']; 
 $price=$_POST['price']; 
 $p_type=$_POST['p_type']; 
 //$fnm=$p_image['name']; 
 //$tmploc=$p_image['tmp_name']; 
 //$cloc='P_Image/'.$fnm; 
 //$a=move_uploaded_file($tmploc,$cloc); 
 $con=mysqli_connect("localhost","root","","project"); 
 $sql="INSERT into product_detail 
values('".$p_id."','".$p_name."','".$p_description."',".$stock.",".$price.",'".$p_type."')"; 
 $r=mysqli_query($con,$sql); 
 if($r>=0) 
 { 
 ## header('location:Product_data_insert.php'); 
 echo "Product Insertion is Successful"; 
 } 
 else 
 { 
 echo "Product Insertion is NOT successful"; 
 } 
?> 