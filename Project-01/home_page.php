<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: ./PHP/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slider.css">
    
    <title>Empower Fund</title>
</head>
<body >
    <header id="header" >
        <div class="logo"><a href="index.html"><img src="./images/web_name_logo1.png" style="height:5vw";></a></div>
        <!-- if checkbox  remove nav no more responsive -->
        <input type="checkbox" id="nav_check" hidden> 
        <nav>
            <ul>
                <li>
                    <a href="#slider" >Home</a>
                </li>
                <li>
                    <a href="#service">Services</a>
                </li>
                <li>
                    <a href="#blog">Blog</a>
                </li>
                <li>
                    <a href="./contact_us.php">Contact us</a>
                </li>
                 <!-- Donate Button -->
                 <li class="donate-button">
                    <a href="payment.php" class="donate-link">Donate</a>
                </li>
                <li class="profile-menu">
                     <a class="fas fa-user-circle"  style='font-size:1rem; margin-top:-6px' >Hello,&nbsp <?php echo $_SESSION['name']; ?></a>
                    <!-- <a href="#" > Profile</a> -->
                    <ul class="sub-menu">
                        <li><a href="./PHP/logout.php">Log out</a></li>
                    </ul>
                 </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

    

    <!-- slider code -->
    <section>
        <div class="slider" id="slider">
            <!-- fade css -->
            
            
            <div class="myslide fade">
                <div class="txt">
                    <h1>Health</h1>
                    <p>Empower Health, Empower Lives<br> Donate Today!</p>
                </div>
                <img src="./images/health_doc.jpg" style="width: 100%; height: 100%;">
            </div>
            <div class="myslide fade">
                <div class="txt">
                    <h1>Education</h1>
                    <p>Knowledge is Power, and It Begins with Education. <br>changes</p>
                </div>
                <img src="./images/Education2.jpg" class="slider-img" style="width: 100%; height: 100%; ">
            </div>
            <div class="myslide fade">
                <div class="txt">
                    <h1>Children rights </h1>
                    <p>"Stand Up for Children<br> Donate for Their Rights!"</p>
                </div>
                <img src="./images/rights_for_children.jpg" style="width: 100%; height: 100%;">
            </div>
            
            
            <!-- /fade css -->
            
            <!-- onclick js -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            <div class="dotsbox" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                
            </div>
            <!-- /onclick js -->
        </div>
        
    </section> 
    

                                                     <!-- service section -->
    <?php include 'service.php';?>

                                                    <!--Blog Section started-->
    <?php include 'blog.php';?>
    <script src="./js/slider.js"></script>
    <script>
        // Get the profile menu item
        var profileMenu = document.querySelector('.profile-menu');
        // Add event listener for mouseenter
        profileMenu.addEventListener('mouseenter', function() {
            // Show the submenu
            this.querySelector('.sub-menu').style.display = 'block';
        });
        // Add event listener for mouseleave
        profileMenu.addEventListener('mouseleave', function() {
            // Hide the submenu
            this.querySelector('.sub-menu').style.display = 'none';
        });
    </script>
        <!-- smooth scrolling  -->
        <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
    <?php include 'Footer.php';?>
</body>
</html>