<?php
    $Notice = $_POST["write_notice"]; 
	$faculty_name = $_POST["faculty_name"]; 

    $db =  mysqli_connect("127.0.0.1", "root" , "", "studentmsdata");

	if ($db->connect_error) {
         echo "something wrong with datababse connection";
     }
	 else{
		 echo "succesfull";
	 }
	 $x = "INSERT INTO faculty_notice VALUES ('', '$Notice', '$faculty_name')";
	 $db->query($x);
	 header("Location:Facultydash.php"); 
	 
?>