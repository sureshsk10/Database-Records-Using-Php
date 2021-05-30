<html>
<title>Registration</title>
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
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <h1>Registration Form</h1>
        <div class="row">
		    <div class="col-sm-6">
		     Name:<input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
		    </div>
		    <div class="col-sm-6">
		     Mobile:<input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" required>
		    </div>
	    </div>
	    <div class="row">
		    <div class="col-sm-6">
		         Select Your Gender:<br>
		         <div class="radio">
			      <label><input type="radio" id="male" name="gender" value="male">Male</label>
			    </div>
			    <div class="radio">
			      <label> <input type="radio" id="female" name="gender" value="female">Female</label>
			    </div>
			    <div class="radio disabled">
			      <label><input type="radio" id="other" name="gender" value="other">Others</label>
		        </div>
		     </div>
		     <div class="col-sm-6"><br>
		    Choose your Role:<br>
			<select name="role" class="form-control" id="role">
			    <option value="admin">Admin</option>
			    <option value="user">User</option>
			  </select>
		    </div>
	    </div>
	     <div class="row">
		    <div class="col-sm-6">
		    Choose Your Skills<br>
		    <div class="checkbox">
		      <label><input type="checkbox" name="skills[]" value="HTML5">HTML5</label>
		    </div>
		    <div class="checkbox">
		      <label><input type="checkbox" name="skills[]" value="CSS3">CSS3</label>
		    </div>
		    <div class="checkbox disabled">
		      <label><input type="checkbox" name="skills[]" value="PHP" >PHP</label>
		    </div>
		    <div class="checkbox disabled">
		      <label><input type="checkbox" name="skills[]" value="JAVASCRIPT">JavaSCRIPT</label>
		    </div>
		    </div>
		    <div class="col-sm-6">
		     Email<input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
		    </div>
	    </div>
	    <div class="row">
		    <div class="col-sm-6">
		     Password<input type="password" class="form-control" name="pwd" placeholder="Enter Your Password" required>
		    </div>
		    <div class="col-sm-6">
		     Dob<input type="date" class="form-control" name="dob">
		    </div>
	    </div>
	    <div class="row">
		    <div class="col-sm-12"><br>
		     <input type="submit" class="btn-primary btn form-control" value="submit" name="submit" >
		    </div>
	    </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	$servername="localhost";
	$username="root";
	$password="";
	$database="task";
	$con=mysqli_connect($servername,$username,$password,$database);
	if(!$con)
	{
		echo"DB Not Connected";
	}
	// print_r($skills);
	$str = implode(',', $skills);
	//print_r($str);
	$sql="INSERT INTO registration(name,mobile,gender,role,skills,email,password,dob)values('$name','$mobile','$gender','$role','$str','$email','$pwd','$dob');";
    $sql2=mysqli_query($con,$sql);
     if($sql2){
     	// header("location:login.php");
	   echo"<h4 style='color:green;margin-left:500px'>Registred Successfully</h4>";
	   echo "<a href='login.php' style='margin-left:500px'>Click here to Login</a>";
    }else{
    	echo"<h4 style='color:red;margin-left:500px'>Enter Valid Details</h4>";
     }



}
?>