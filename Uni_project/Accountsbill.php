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
                <li><a href="AccountsHome.php">Accounts profile</a></li>
                <li><a href="Accountsbill.php">Payment data</a></li>
                <li><a href="confirmedbill.php">Confirmed info</a></li>
            </ul>
        </nav>
    </header>
    <div class="stureg"><h1>Students bill payment</h1></div>
   <br>
    <?php
        $sql = "SELECT * FROM stu_bills;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
            echo "Name : "; echo $row['name'] . "<br>"; 
            echo "ID : "; echo $row['id'] . "<br>"; 
            echo "Paid Amount : "; echo $row['Amount'] . "<br>" . "<br>"; 
            // echo "Courses : "; echo $row['Courses'] . "<br>" . "<br>"; 
            }
        }
    ?>
    
    </body>
</html>
