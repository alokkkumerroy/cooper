<?php
     $con=mysqli_connect("localhost","root","","cooper");
	
	If($con){
		
		echo"connect";
	}
	else{
		echo "not connect";
	}

?>