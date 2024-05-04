
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        
        
        body{
            
            background-image: url("../images/login_bg_2.jpg");
            background-size:cover;
            

            
        }
        .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        box-shadow: inset 0 0 0 400px rgba(255, 255, 255, 0.5); /* White color with 50% opacity */
        z-index: 1; /* Ensure the overlay is positioned above the background image */
}
        .wrapper{
            /* width: 330px; */
            width:30vw;
            
            padding:2rem 1rem;
            margin: 6rem auto;
            /* https://www.joshwcomeau.com/gradient-generator/  source of colour*/ 
            background-image: linear-gradient(35deg,
  hsl(133deg 86% 66%) 0%,
  hsl(132deg 81% 68%) 4%,
  hsl(131deg 77% 69%) 8%,
  hsl(130deg 71% 70%) 12%,
  hsl(129deg 66% 71%) 16%,
  hsl(128deg 60% 72%) 20%,
  hsl(127deg 54% 72%) 25%,
  hsl(125deg 48% 73%) 29%,
  hsl(123deg 42% 73%) 33%,
  hsl(121deg 35% 74%) 37%,
  hsl(117deg 29% 74%) 42%,
  hsl(112deg 23% 74%) 46%,
  hsl(110deg 22% 76%) 51%,
  hsl(107deg 20% 78%) 56%,
  hsl(104deg 18% 80%) 60%,
  hsl(98deg 16% 82%) 65%,
  hsl(89deg 13% 84%) 70%,
  hsl(72deg 10% 86%) 75%,
  hsl(39deg 10% 88%) 80%,
  hsl(8deg 13% 91%) 86%,
  hsl(345deg 24% 93%) 91%,
  hsl(334deg 43% 95%) 95%,
  hsl(328deg 79% 96%) 100%
);
            border-radius: 10px;
            text-align: center;
            box-shadow:0 20px 35px rgba(0, 0,0, 0.1)
        }
        h1{
            font-size: 2rem;
            color: linear-gradient(18deg, rgba(170,176,182,1) 0%, rgba(190,240,172,1) 80%); 
            margin-bottom: 1.2rem;
        }
        form input{
            width:92%;
            outline: none;
            border: 1px solid #fff;
            padding: 12px 20px ;
            margin-bottom: 10px;
            border-radius: 20px;
            background: #e4e4e4;
        }
        button{
            font-size: 1rem;
            margin-top: 1.8rem;
            border-radius: 20px;
            padding: 10px 0;
            outline: none;
            border: none;
            width: 90%;
            color: #fff;
            cursor: pointer;
            background:rgb(17, 107, 143);
        }
        botton:hover{
            background:rgb(131, 190, 224);
        }
        input:focus{
            border: 1px solid rgb(192 , 192 ,192);
        }
        .recover{
            text-align: right;
            font-size: 0.7rem;
            margin:0.4rem 1.5rem 0 0;
        }

        .recover a{
            text-decoration: none;
            color: #464647;
        }
        .member{
            font-size: 0.8rem;
            margin-top: 1.5rem;
            color: #636363;
        }
        .member a{
            color: rgb(17, 107, 143);
            text-decoration: none;
        }
        .sub_button:hover{
            background-color:#7FE284;
            border:1px solid #205922;
            color:white;
        }
        
        
    </style>
</head>
<body class="overlay">
    

    
    <div class="wrapper">
    <?php session_start(); ?>

<?php
if (isset($_POST["submit"])) {
    $email = $_POST['EmailId'];
    $pass = $_POST['Password'];
    $cn = mysqli_connect("localhost", "root", "", "empower_fund");
    $sql = "SELECT * FROM login_reg WHERE Email='$email'";
    $result = mysqli_query($cn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        // Verify password - you may use password_hash and password_verify for secure password handling
        if ($pass == $user["password"]) {
            $username = $user['Name'];
            $useremail = $user['Email'];
            $_SESSION['name'] = $user['Name'];

            // Redirect to welcome page after successful login
            header("Location:../home_page.php");   
        }
    
        else 
        {
            echo "Password does not match";
        }
    }
    elseif($email=="admin82@gmail.com" && $pass=="admin"){
            header("Location:admin.php");
            exit;
    } 
    else {
        echo "Email does not exist";
    }
}
?>

       <h1>Login</h1>
        <form action="login.php" method="post">
         <input type="email"      name="EmailId" placeholder="Email">
        <input type="password"   name="Password" placeholder="Password">

            <div class="recover">
                <!-- <a href="#">Forgot Password?</a> -->
            </div>
            <input type="submit"  value="Login" name="submit" class="sub_button">
        </form>
        
        
        
        <div class="member">
            Not a member?<a href="signup.php">Sign Up here</a>
        </div>
    </div>
</body>
</html>