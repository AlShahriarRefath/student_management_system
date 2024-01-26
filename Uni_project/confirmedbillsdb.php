<?php
    $Name = $_POST["stu_name"]; 
	$ID = $_POST["stu_id"]; 
	$Amount = $_POST["stu_amount"];

    $db =  mysqli_connect("127.0.0.1", "root" , "", "studentmsdata");

	if ($db->connect_error) {
         echo "something wrong with datababse connection";
     }
	 else{
		 echo "succesfull";
	 }
	 $x = "INSERT INTO confrm_payment VALUES ('', '$Name', '$ID', '$Amount')";
	 $db->query($x);
	 header("Location:confirmedbill.php"); 
	 
?>