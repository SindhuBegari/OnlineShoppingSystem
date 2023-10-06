<html> 
<title>Admin Login</title> 
<body> 
 <?php 
 session_start(); 
 if(isset($_SESSION['admin'])) 
 { 
 ?> 
 <li><a href="Admin_actions.php" class="btn btn-lg"> 
 <?php echo $_SESSION['admin']['name'];?> 
 </a>&nbsp; 
 </li> 
 <li><a href="logout.php" class="btn btn-lg">log out 
 </a></li> 
 <?php 
 }else{ 
 ?> 
 
 <?php 
 } 
 ?> 
 </ul> 
 
 
 
 </div> 
 </nav> 
 </div> 
<div style="width:300px;margin-left:150px;display:inline-block;"> 
</div> 
<form action="Admin_login_database_connectivity.php" method="post"> 
<div style="width:500px;margin-left:450px;display:inline-block;"> 
 <!--<div class="container">--> 
<h2></h2> 
<table class="table table-bordered"> 
 <thead> 
 <tr> 
 <th rowspan="2"><h3>Admin Login</h3></th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr class="active"> 
 <td class="td1"><b>Employee ID</b></td> 
 </tr> 
 <tr class="warning"> 
 <td><input type="text" name="emp_id"></td> 
 </tr> 
 <tr class="active"> 
 <td class="td1"><b>Password</b></td> 
 </tr> 
 <tr class="warning"> 
 <td><input type="password" name="password"/></td> 
 </tr> 
 <tr class="active" align="center"> 
 <td style="color:black;"> 
 <button type="SUBMIT" class="btn btn-primary">SUBMIT</button></td> 
 </tr> 
 </tbody> 
 </table> 
<!--</div>--> 
</form> 
</div> 
<div style="width:100px;margin-left:1400px;display:inline-block;"> 
</div> 
</body> 
</html> 