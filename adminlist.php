<html>
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admin Page</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Gender</th>
        <th>Role</th>
        <th>Skills</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $servername="localhost";
	$username="root";
	$password="";
	$database="task";
	$con=mysqli_connect($servername,$username,$password,$database);
	if(!$con)
	{
		echo"DB Not Connected";
	}
	$sql="SELECT * FROM registration";
	//print_r($sql);
    $sql2=mysqli_query($con,$sql);
    while($result=mysqli_fetch_row($sql2)){ 	
     echo "<tr>";
     echo  "<td>$result[1]</td>";
     echo  "<td>$result[2]</td>";
     echo  "<td>$result[3]</td>";
     echo  "<td>$result[4]</td>";
     echo  "<td>$result[5]</td>";
     echo  "<td>$result[6]</td>";
     echo  "<td>$result[8]</td >";
     echo  "<td><a href='update.php?id=$result[0]&page=admin'>Edit</a></td>"; 
     echo  "<td><a href='delete.php?id=$result[0]'>Delete</a></td>";     
     echo  "<tr></tr>";
   }?>
    </tbody>
  </table>
</div>
<?php
if(isset($_REQUEST['delete'])){
	$servername="localhost";
	$username="root";
	$password="";
	$database="task";
	$con=mysqli_connect($servername,$username,$password,$database);
	if(!$con)
	{
		echo"DB Not Connected";
	}
    	$id = $_REQUEST['delete'];
    	if($id==1){
         echo"<h4 style='color:green;margin-left:500px'>Deleted Successfully</h4>";    	
     }
}
  ?>  	
 
 <?php
if(isset($_REQUEST['update'])){
	$servername="localhost";
	$username="root";
	$password="";
	$database="task";
	$con=mysqli_connect($servername,$username,$password,$database);
	if(!$con)
	{
		echo"DB Not Connected";
	}
    	$id = $_REQUEST['update'];
    	if($id==1){
         echo"<h4 style='color:green;margin-left:500px'>Updated Successfully</h4>";    	
     }
}
  ?>  	 
</body>
</html>




