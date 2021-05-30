<html>
<title>Update</title>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php
if(isset($_REQUEST['id'])){
	$servername="localhost";
	$username="root";
	$password="";
	$database="task";
	$con=mysqli_connect($servername,$username,$password,$database);
	if(!$con)
	{
		echo"DB Not Connected";
	}
    	$id = $_REQUEST['id'];
    	$sql="SELECT * FROM registration WHERE id='$id'";
    	//print_r($sql);
        $sql2=mysqli_query($con,$sql);
        $result=mysqli_fetch_row($sql2);
        //print_r($result[5]);
        $skilsList =explode(',',$result[5]);
        //print_r($skilsList);
    ?>
    
<form method="post" action="">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <h1>Update Form</h1>
        <div class="row">
		    <div class="col-sm-6">
		     Name:<input type="text" name="name" class="form-control" value=<?php print_r($result[1]);?> placeholder="Enter Your Name" required>
		    </div>
		    <div class="col-sm-6">
		     Mobile:<input type="text" name="mobile" class="form-control" value=<?php print_r($result[2]);?> placeholder="Enter Your Mobile Number" required>
		    </div>
	    </div>
	    <div class="row">
		    <div class="col-sm-6">
		         Select Your Gender:<br>
		         <div class="radio">
			      <label><input type="radio" id="male" name="gender" value="male" <?php if($result[3]=="male"){ echo "checked";}?>>Male</label>
			    </div>
			    <div class="radio">
			      <label> <input type="radio" id="female" name="gender" value="female" <?php if($result[3]=="female"){ echo "checked";}?>>Female</label>
			    </div>
			    <div class="radio disabled">
			      <label><input type="radio" id="other" name="gender" value="other" <?php if($result[3]=="other"){ echo "checked";}?>>Others</label>
		        </div>
		     </div>
		     <div class="col-sm-6"><br>
		    Choose your Role:<br>
			<select name="role" class="form-control" id="role">
			    <option value="admin" <?php if ($result[4] == 'admin') echo ' selected="selected"'; ?>>Admin</option>
			    <option value="user" <?php if ($result[4] == 'user') echo ' selected="selected"'; ?>>User</option>
			  </select>
		    </div>
	    </div>
	     <div class="row">
		    <div class="col-sm-6">
		    Choose Your Skills<br>
		    <div class="checkbox">
		      <label><input type="checkbox" name="skills[]" value="HTML5" <?php if (in_array('HTML5', $skilsList)) echo 'checked="checked"'; ?>>HTML5</label>
		    </div>
		    <div class="checkbox">
		      <label><input type="checkbox" name="skills[]" value="CSS3" <?php if (in_array('CSS3', $skilsList)) echo 'checked="checked"'; ?>>CSS3</label>
		    </div>
		    <div class="checkbox disabled">
		      <label><input type="checkbox" <?php if (in_array('PHP', $skilsList)) echo 'checked="checked"'; ?> name="skills[]" value="PHP" >PHP</label>
		    </div>
		    <div class="checkbox disabled">
		      <label><input type="checkbox" <?php if (in_array('JAVASCRIPT', $skilsList)) echo 'checked="checked"'; ?> name="skills[]" value="JAVASCRIPT">JavaSCRIPT</label>
		    </div>
		    </div>
		    <div class="col-sm-6">
		     Email<input type="email" class="form-control" name="email" value=<?php print_r($result[6]);?> placeholder="Enter Your Email" required>
		    </div>
	    </div>
	    <div class="row">
		    <div class="col-sm-6">
		     Password<input type="password" class="form-control" name="pwd" value=<?php print_r($result[7]);?> placeholder="Enter Your Password" required>
		    </div>
		    <div class="col-sm-6">
		     Dob<input type="date" class="form-control" value=<?php print_r($result[8]);?>  name="dob">
		    </div>
	    </div>
	    <div class="row">
		    <div class="col-sm-12"><br>
		     <input type="submit" class="btn-primary btn form-control" value="Update" name="submit" >
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
}
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
	$sql = "UPDATE registration
      SET name='$name',mobile='$mobile',gender='$gender',role='$role',skills='$str',email='$email',password='$pwd',dob='$dob'
      WHERE id= '$id'";
    $sql2=mysqli_query($con,$sql);
     if($sql2){
     	if($_REQUEST['page']=='user'){
     		header("location:userlist.php?update=1");
     	}else{
     		header("location:adminlist.php?update=1");
     	}
     	 
	   echo"<h4 style='color:green;margin-left:500px'>Updated Successfully</h4>";

    }else{
    	echo"<h4 style='color:red;margin-left:500px'>Enter Valid Details</h4>";
     }



}
?>