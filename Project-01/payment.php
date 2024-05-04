<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>payment</title>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/payment.css">

</head>
<body >
<!------------Header for navigation  bar --------------------------->
<header>
        <div class="main_logo"><a href="index.html"><img src="./images/web_name_logo1.png" style="height:5vw"></a></div>
        <!-- if checkbox  remove nav no more responsive -->
        <input type="checkbox" id="nav_check" hidden> 
        <nav>
            <ul>
                <?php 
                session_start();
                if(isset($_SESSION['name'])){
                    echo '<li><a href="home_page.php" >Home</a></li>';
                }
                else{
                    echo '<li><a href="./index.php" >Home</a></li>';
                }
                ?>
                
                <li>
                    <a href="">Services</a>
                </li>
                <li>
                    <a href="">Blog</a>
                </li>
                <li>
                    <a href="./contact_us.php" >Contact us</a>
                </li>
                    <!-- // dynamic changes -->
                    <?php
                    
                    if(isset($_SESSION['name'])) {
                        // User is logged in, display logout option
                        
                        echo ' <li class="donate-button">';
                        echo ' <a href="payment.php" class="donate-link" class="active">Donate</a>';
                        echo '</li>';
                        echo '   <li class="profile-menu">';
                        echo '<a class="fas fa-user-circle" style="font-size: 1rem; margin-top: -6px;">Hello, ' . $_SESSION['name'] . '</a>';
                        echo   ' <ul class="sub-menu">';
                        echo   ' <li><a href="./PHP/logout.php">Log out</a></li>';
                        echo   ' </ul>';
                        echo   ' </li>';
                    } else {
                        // User is not logged in, display login/register option
                        
                        echo '<li><a href="./PHP/login.php">Login / Register</a> </li>';
                    }
                    ?>
                <!-- <li>
                    <a href="./PHP/login.php">Login / Register</a>
                </li> -->
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
</header>

<section>
        <h2 style="margin-left: 45%;" >Payment Form</h2>
      <div class="container">

        <form action="./PHP/payment.php" method="post" >

          <div class="form-group">
            <img src="images/web_name_logo1.png" alt="Logo" class="logo">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" required>
          </div>
          <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}"  minlength="10" maxlength="10" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"required>
          </div>
          <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" min="0" required>
          </div>
          <input type="submit" class="pay-btn" name="submit" value="Paynow">
        </form>
      </div>
</section>
<?php include 'Footer.php';?>
</body>
</html>
