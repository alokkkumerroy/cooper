<?php 

include_once("connection.php");

if(isset($_POST["submit"])){

$CakeName=$_POST["CakeName"];
$CakeDesign=$_POST["CakeDesign"];
$KGPrice=$_POST["KGPrice"];
$Wish=$_POST["Wish"];
$Branchname=$_POST["Branchname"];
$DeliveryDate=$_POST["DeliveryDate"];



$sql=mysqli_query( $con,"INSERT INTO orderr(CakeName,CakeDesign,KGPrice,Wish,Branchname,DeliveryDate)VALUES('$CakeName','$CakeDesign','$KGPrice','$Wish','$Branchname','$DeliveryDate')");
if($sql){

echo "Inserted";
}
else{
	echo"not Inserted ";
}
}

 ?>