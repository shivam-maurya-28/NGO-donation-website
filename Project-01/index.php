.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slider.css">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    <title>Empower Fund</title>
</head>
<body>
    <header >
        <div class="logo"><a href="index.html"><img src="./images/web_name_logo1.png" style="height:5vw; "></a></div>
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
                <!-- <li>
                    <a href="./PHP/login.php">Login / Register</a>
                </li> -->
                <li>
                    <a href="./PHP/login.php">Login / register</a>
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
        <div class="slider">
            <!-- fade css -->
            <div class="myslide fade">
                <div class="txt">
                    <h1>Education</h1>
                    <p>Knowledge is Power, and It Begins with Education. <br>changes</p>
                </div>
                <img src="./images/Education2.jpg" style="width: 100%; height: 100%;">
            </div>
            
            <div class="myslide fade">
                <div class="txt">
                    <h1>Health</h1>
                    <p>Empower Health, Empower Lives<br> Donate Today!</p>
                </div>
                <img src="./images/health_doc.jpg" style="width: 100%; height: 100%;">
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

                                    <!-- Service section started  -->
    <?php include 'service.php';?>

                                    <!-- Blog section started  -->
    <?php include 'blog.php';?>

    <!-- Footer section started  -->
    <footer>
        <div class="fcontainer">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email:EmpowerFund@gmail.com</p>
                <p>Phone:+91 9999999999</p>
                <p>Address: webdevelopers sector01 binarystation mumbai-101010101 </p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                 <ul class="list">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="./contact_us.php">Contact</a></li>
                    <li><a href="./PHP/login.php">Login / Register</a></li>
                 </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                 <li><a href=""><i class="fab fa-facebook"></i></a></li>
                 <li><a href=""><i class="fab fa-twitter"></i></a></li>
                 <li><a href=""><i class="fab fa-instagram"></i></a></li>
                 <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                </ul>
                </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2024 Empower Fund  </p>
        </div>
    </footer>
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
    <script src="./js/slider.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>