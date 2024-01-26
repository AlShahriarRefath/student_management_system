<?php
 include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>UATE</title>
     <link rel="shortcut icon" href="images/UATE.png" type="image/x-icon">
     <link rel="stylesheet" href="CSS/styles.css">
     <script src="https://kit.fontawesome.com/c0aa5186b3.js" crossorigin="anonymous"></script>
</head>

<!-- --------- Logo & campus pics ----------- -->

<body>
     <section class="header-images">
        <div class="front-images">
            <img src="images/Uni1.jpg" alt="">
        </div>
        <div class="front-images2">
            <img src="images/UATE.png" alt="">
        </div>
        <div class="front-images">
            <img src="images/Uni2.jpg" alt="">
        </div>
    </section>
        <!-- ------ Navigation bar ---------- -->
        <header>
        <nav>
            <ul >
                <li><a href="FacultyHome.php">Faculty profile</a></li>
                <li><a href="FacultyReg.php">Registered students</a></li>
                <li><a href="Facultydash.php">Faculty dashboard</a></li>
            </ul>
           
        </nav>
    </header>
    <div class="stureg"><h1>Students Registered </h1>
                         <h1>for this semester</h1></div>
   <br>
    <?php
        $sql = "SELECT * FROM reg_done;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
            echo "Name : "; echo $row['Stu_Name'] . "<br>"; 
            echo "ID : "; echo $row['Stu_ID'] . "<br>"; 
            echo "Dept : "; echo $row['Stu_Dept'] . "<br>"; 
            echo "Courses Taken : "; echo $row['Stu_Courses'] . "<br>" . "<br>"; 
            }
        }
        
    ?>