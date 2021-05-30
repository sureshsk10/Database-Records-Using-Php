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
    	$sql="DELETE FROM registration WHERE id='$id'";
        $sql2=mysqli_query($con,$sql);
        if($sql2){
        	echo"Deleted Successfully";
        	header("location:adminlist.php?delete=1");
        }
        else{
        	header("location:adminlist.php?delete=0");

        }


}

?>