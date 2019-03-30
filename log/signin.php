<?php
require_once'SIGNIN.HTML';
$Fullname=$_POST["Fullname"];
$Email=$_POST["Email"];
$Gender=$_POST["Gender"];
$Bday=$_POST["Bday"];
$Phonenumber=$_POST["Phonenumber"];
$Address=$_POST["Address"];
$Password=$_POST["Password"];

$con=mysqli_connect("localhost","root","","cooper");
if($con){
	echo "connect";
}
else{
	echo"not connect";
}
$query=mysqli_query( $con,"INSERT INTO registration(Fullname,Email,Gender,Bday,Phonenumber,Address,Password)values('$Fullname','$Email','$Gender','$Bday','$Phonenumber','$Address','$Password')");
if($query){

echo "Inserted";
}
else{
	echo"not Inserted ";
}

?>