<!DOCTYPE html>
<html>
<head>
	<title>UATE</title>
     <link rel="shortcut icon" href="images/UATE.png" type="image/x-icon">
     <link rel="stylesheet" href="CSS/allstyles.css">
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

    <br><br>
<form action="Facultydashdb.php" method="post">
<h2>My dashboard</h2>
<h2>(Notices for students)</h2>
   <label>Write down your notice</label>
   <br>
   <textarea name="write_notice"></textarea>
   <br>
   <label>Faculty name</label>
   <input type="text" name="faculty_name" placeholder="Name"><br>
   <br>
<button class="ABC" type="submit"> <i class="fa-solid fa-right-to-bracket fa-fade" style="color: #ffffff;"></i>   Submit notice</button>
</form>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
