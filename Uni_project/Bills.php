<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UATE</title>
    <link rel="shortcut icon" href="images/UATE.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/c0aa5186b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/allstyles.css">
</head>
<body>
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
<br><br>
<form action="billsdb.php" method="post">
<h2>Online payment</h2>
<label>Name</label>
<input type="text" name="name" placeholder="Name"><br>

<label>ID</label>
<input type="number" name="id" placeholder="ID"><br>

<br>
<div class="front-images">
<img src="images/card.png" alt="">
</div>
<br>

<label>Card Holders name</label>
<input type="text" name="cardname" placeholder="Name"><br>

<label>Card number</label>
<input type="password" name="cardnum" placeholder="Number"><br>

<label>Exp date</label>
<input type="text" name="expdata" placeholder="MM/YY"><br>

<label>CVV</label>
<input type="text" name="cvv" placeholder="CVV"><br>
<!-- <label>Select platform</label>
<select name="dept">
    <option value="CSE">Bkash</option>
    <option value="EEE">Nagad</option>
</select> -->
<br> 
<br>
<label>Amount : </label>
<input type="text" name="amount" placeholder="Tk"><br>
<button class="ABC" type="submit"> <i class="fa-solid fa-right-to-bracket fa-fade" style="color: #ffffff;"></i>   Pay now</button>
</form>
<br>
<br>
<br>
<br>
<br>
</body>
</html>