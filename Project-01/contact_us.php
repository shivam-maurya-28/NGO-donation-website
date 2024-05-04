

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    <title>Empower Fund </title>
</head>
<body>
    <!------------Header for navigation  bar --------------------------->
    <header>
        <div class="logo"><a href="index.html"><img src="./images/web_name_logo1.png" style="height:5vw"></a></div>
        <!-- if checkbox  remove nav no more responsive -->
        <input type="checkbox" id="nav_check" hidden> 
        <nav>
            <ul>
                <?php 
                session_start();
                if(isset($_SESSION['name'])){
                    echo '<li><a href="home_page.php" >Home</a></li>';
                    echo      '<li><a href="home_page.php#service">Services</a></li>';
                    echo   '<li><a href="home_page.php#blog">Blog</a></li>';
                    echo  '<li><a href="#" class="active">Contact us</a></li>';
                }
                else{
                    echo '<li><a href="./index.php" >Home</a></li>';
                      echo      '<li><a href="index.php#service">Services</a></li>';
                         echo   '<li><a href="index.php#blog">Blog</a></li>';
                          echo  '<li><a href="#" class="active">Contact us</a></li>';
                }
                ?>
                
                
                    <!-- // dynamic changes -->
                    <?php
                    
                    if(isset($_SESSION['name'])) {
                        // User is logged in, display logout option
                        
                        echo ' <li class="donate-button">';
                        echo ' <a href="payment.php" class="donate-link">Donate</a>';
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
    <!-- section started  -->
    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h3>Send us message</h3>
                    <!-- loginsystem@gmail.com -->
                    <form action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="94d1b362-134e-4380-a5c7-5037d9608e75">
                        <div class="form-group">
                            <!-- <input type="hidden" name="access_key" value="7a48d93f-d8d7-41ff-967b-dc512a0cabe1"> -->
                            <input type="text" name="name" placeholder="your Name ">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" >Send Message</button>
                    </form>
                </div>
                <div class="contact-info" style="margin-left:8rem;">
                    <h3>Contact Information</h3>
                    <p><i class="fa fa-phone" ></i>  +91 9999999999</p>
                    <p><i class="fa fa-envelope"></i>EmpowerFund@gmail.com</p>
                    

                </div>
            </div>
        </div>
    </section>
    <?php include 'Footer.php';?>

</body>
</html>