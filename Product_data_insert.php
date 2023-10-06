<html> 
<body> 
<form action="Product_data_Save.php" method="post" enctype="multipart/form-data"> 
<div style="width:500px;margin-left:450px;display:inline-block;"> 
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th rowspan="2"><h3>Insert Product Data</h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr> 
 <td class="td1"><b>Unique Product ID</b></td> 
 </tr> 
 <tr> 
 <td><input type="text" name="p_id" placeholder="like P001,P002 etc."></td> 
 </tr> 
 <tr> 
 <td class="td1"><b>Product Name</b></td> 
 </tr> 
 <tr> 
 <td><input type="text" name="p_name" placeholder="Product Name"></td> 
 </tr> 
 <tr> 
 <td class="td1"><b>Product Description</b></td> 
 </tr> 
 <tr> 
 <td><input type="text" name="p_description" placeholder="Under 20 words"/></td> 
 </tr> 
 <tr> 
 <td class="td1"><b>Product quantity/stock</b></td> 
 </tr> 
 <tr> 
 <td><input type="text" name="stock"placeholder="only numbers,like 20,30 etc."></td> 
 </tr> 
 <tr> 
 <td class="td1"><b>Product price</b></td> 
 </tr> 
 <tr> 
 <td><input type="text" name="price" placeholder="only numbers,like 129,899 etc."></td> 
 </tr> 
 <tr> 
 <td class="td1"><b>Product type/category</b></td> 
 </tr> 
 <tr> 
 <td><input type="text" name="p_type"placeholder="like Electronics, Garments etc."></td> 
 </tr> 
 <tr align="center"> 
 <td><button type="SUBMIT" class="btn btn-primary">INSERT</button></td> 
 </tr> 
 </tbody> 
 </table> 
</form> 
</body> 
</html> 