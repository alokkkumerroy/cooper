<?php

	$con=mysqli_connect("localhost","root","","cooper");
	
	If($con){
		
		echo"s";
	}
	else{
		echo "not connect";
	}

?>