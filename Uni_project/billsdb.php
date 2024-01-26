<?php
    $name = $_POST["name"]; 
	$id = $_POST["id"]; 
    // $Card_Holders_Name = $_POST["cardname"]; 
    // $Card_Number = $_POST["cardnum"];
    // $Exp_date = $_POST["expdata"]; 
    // $CVV = $_POST["cvv"]; 
	$Amount = $_POST["amount"];

    $db =  mysqli_connect("127.0.0.1", "root" , "", "studentmsdata");

	if ($db->connect_error) {
         echo "something wrong with datababse connection";
     }
	 else{
		 echo "succesfull";
	 }
	 $x = "INSERT INTO stu_bills VALUES ('', '$name', '$id', '$Amount')";
	 $db->query($x);
	 header("Location:Bills.php"); 

	//  '$Card_Holders_Name', '$Card_Number', 
	//  '$Exp_date', '$CVV ',
	 
?>