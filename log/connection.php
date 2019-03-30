<?php 

$con=mysqli_connect("localhost","root","","cooper");
if($con){
	echo "connect";
}
else{
	echo"not connect";
}
 ?>