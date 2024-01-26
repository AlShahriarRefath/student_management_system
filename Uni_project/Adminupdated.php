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
            <li><a href="AdminHome.php"> Admin profile</a></li>
                <li><a href="AdminReg.php">Registration data</a></li>
                <li><a href="Submittedbills.php">Submitted bills</a></li>
                <li><a href="Adminupdated.php">Updated data</a></li>
            </ul>
           
        </nav>
    </header>

    <br><br>
<form action="Adminupdateddb.php" method="post">
<h2>Update Registered Students</h2>
<label>Name</label>
<input type="text" name="nAme" placeholder="Name"><br>

<label>ID</label>
<input type="number" name="iD" placeholder="ID"><br>

<label>Department:</label>
<select name="dEpt">
    <option value="CSE">CSE</option>
    <option value="EEE">EEE</option>
	<option value="CE">CE</option>
    <option value="IT">IT</option>
    <option value="BBA">BBA</option>
	<option value="English">ENG</option>
</select>
<br>
<label>Courses Taken : </label>
<input type="text" name="cOurses" placeholder="Courses"><br>
<button class="ABC" type="submit"> <i class="fa-solid fa-right-to-bracket fa-fade" style="color: #ffffff;"></i>  Update now</button>
</form>
<br>
<br>
<br>
<br>
<br>
</body>
</html>