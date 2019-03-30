<?php 
if(isset($_POST["submit"])){
     $Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$con=mysqli_connect("localhost","root","","cooper");
	if($con){
	echo "connected";
	echo"<br>";
}
else{
	echo "not connected";
} 
	$query = "SELECT * FROM registration WHERE Email = '$Email'  AND Password = '$Password'";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result)>0) {
		while ($row =  mysqli_fetch_assoc($result)) {
			echo "Welcome : Mr. ".$row["Fullname"];
		}
	}
	else{
		echo "Something Wrong";
	}
}



 ?>