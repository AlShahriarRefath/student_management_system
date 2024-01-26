<?php
    $username = $_POST["username"]; 
	$number = $_POST["number"]; 
	$dept = $_POST["dept"]; 
	$text = $_POST["text"];

    $db =  mysqli_connect("127.0.0.1", "root" , "", "studentmsdata");

	if ($db->connect_error) {
         echo "something wrong with datababse connection";
     }
	 else{
		 echo "succesfull";
	 }
	 $x = "INSERT INTO stu_reg VALUES ('', '$username', '$number', '$dept', '$text')";
	 $db->query($x);
	 header("Location:reg.php"); 
	 
?>