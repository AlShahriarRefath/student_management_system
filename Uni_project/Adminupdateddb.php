<?php
    $Stu_Name = $_POST["nAme"]; 
	$Stu_ID = $_POST["iD"];  
    $Stu_Dept = $_POST["dEpt"];
	$Stu_Courses = $_POST["cOurses"];

    $db =  mysqli_connect("127.0.0.1", "root" , "", "studentmsdata");

	if ($db->connect_error) {
         echo "something wrong with datababse connection";
     }
	 else{
		 echo "succesfull";
	 }
	 $x = "INSERT INTO reg_done VALUES ('', '$Stu_Name', '$Stu_ID', '$Stu_Dept', '$Stu_Courses')";
	 $db->query($x);
	 header("Location:Adminupdated.php"); 
	 
?>