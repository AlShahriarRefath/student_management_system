<!DOCTYPE html>
<html>
<head>
	<title>UATE</title>
     <link rel="shortcut icon" href="images/UATE.png" type="image/x-icon">
     <script src="https://kit.fontawesome.com/c0aa5186b3.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="CSS/allstyles.css">
</head>
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
                <li><a href="AccountsHome.php">Accounts profile</a></li>
                <li><a href="Accountsbill.php">Payment data</a></li>
                <li><a href="confirmedbill.php">Confirmed info</a></li>
            </ul>
           
        </nav>
    </header>

    <br><br>
<form action="confirmedbillsdb.php" method="post">
<h2>Confirmed payment</h2>
<label>Name</label>
<input type="text" name="stu_name" placeholder="Name"><br>

<label>ID</label>
<input type="number" name="stu_id" placeholder="ID"><br>

<label>Amount : </label>
<input type="text" name="stu_amount" placeholder="Tk"><br>
<button class="ABC" type="submit"> <i class="fa-solid fa-right-to-bracket fa-fade" style="color: #ffffff;"></i>  Confirm</button>
</form>
<br>
<br>
<br>
<br>
<br>
</body>
</html>