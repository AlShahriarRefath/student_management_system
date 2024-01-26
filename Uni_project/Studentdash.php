<?php
 include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>UATE</title>
     <link rel="shortcut icon" href="images/UATE.png" type="image/x-icon">
     <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

<!-- --------- Logo & campus pics ----------- -->

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
            <li><a href="StudentHome.php">Student profile</a></li>
                <li><a href="faculty.php">Faculty members</a></li>
                <li><a href="Reg.php">Course Reg</a></li>
                <li><a href="Class_routine.php">Class Routine</a></li>
                <li><a href="Exam_routine.php">Exam Routine</a></li>
                <li><a href="Bills.php">Bills</a></li>
                <li><a href="Studentdash.php">Student dashboard</a></li>
            </ul>
        </nav>
    </header>
    <div class="stureg"><h1>Faculty Dashboard</h1>
    <h1>(Important notices from faculties)</h1></div>
   <br>
    <?php
        $sql = "SELECT * FROM faculty_notice;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
            echo "Notice from Faculty : "; echo $row['Notice'] . "<br>". "<br>"; 
            // echo "ID : "; echo $row['id'] . "<br>"; 
            echo "Faculty name : "; echo $row['faculty_name'] . "<br>" . "<br>" . "<br>" . "<br> "; 
            // echo "Courses : "; echo $row['Courses'] . "<br>" . "<br>"; 
            }
        }
    ?>
    
    </body>
</html>
