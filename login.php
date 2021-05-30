<html>
<title>Login</title>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post" action="">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" ></div>
    <div class="col-sm-4" >
    <div class="row">
      <h1>Login</h1>
       <div class="col-sm-12">
         Mobile<input type="text" name="mobile" class="form-control" required>
       </div>
       <div class="col-sm-12">
          Password<input type="password" name="pwd" id="pwd" class="form-control" required>
          <input type="checkbox" onclick="myFunction()">Show Password<br>
       </div>
       <div class="col-sm-12">
          <input type="submit" value="Login" name="login" class="btn btn-success">
       </div>
    </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</form>

<script>
function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>
<?php
if(isset($_POST['login']))
{
	extract($_POST);
	$servername="localhost";
	$username="root";
	$password="";
	$database="task";
	$role="";
	$con=mysqli_connect($servername,$username,$password,$database);
	if(!$con)
	{
		echo"DB Not Connected";
	}
	$sql="SELECT * FROM registration where mobile='$mobile' and password='$pwd'";
	// print_r($sql);

	$sql2=mysqli_query($con,$sql);
	if(mysqli_num_rows($sql2)>0)
	{
	  $row=mysqli_fetch_assoc($sql2);
	  $role=$row["role"];
	 if($role=="admin")
	 {
	  header("location:adminlist.php");	
	 }
    if($role=="user")
    {
    	header("location:userlist.php");
    }

	}else {
    	echo"<h4 style='color:red;margin-left:500px'>Enter Valid Details</h4>";
	}
}

?>




