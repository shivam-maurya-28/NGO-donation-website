<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            width: 330px;
            padding:2rem 1rem;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            text-align: center;
            box-shadow:0 20px 35px rgba(0, 0,0, 0.1);
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
        }
        h1{
            font-size: 2rem;
            color: #07001f;
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
        .terms{
            margin-top: 0.2rem;
        }
        .terms input{
            height: 1em;
            width: 1em;
            vertical-align: middle;
            cursor: pointer;
        }
        .terms lable{
            font-size: 0.8rem;
        }
        .terms a{
            color: rgb(17, 107, 143);
            text-decoration: none;
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
        <?php
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $Uname=$_POST['uname'];
           $email=$_POST['email'];
           $pass=$_POST['pass'];
           $cpass=$_POST['cpass'];
        //    $password_hash=password_hash($pass,PASSWORD_DEFAULT);
           $erro=array(); 
           if (empty($Uname) OR empty($email) OR empty($pass) OR empty($cpass) ) {
             array_push($erro,"All field are required ");
            // die("<div class='alert alert-danger'>All field are required </div>");
           }
           if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            array_push($erro,"Email is not vaild ");  
            //echo"<div class='alert alert-danger'>Email is not vaild</div>" ;
           }
           if (strlen($pass)<8) {
            array_push($erro,"Password must be at least 8 charcter ");
            ////echo"<div class='alert alert-danger'>passwor must be at 8 charcter</div>";
           }
           if ($pass !== $cpass) {
            array_push($erro,"Password does not match");
            //echo"<div class='alert alert-danger'>password does not match</div>";
           }
           $cn=mysqli_connect("localhost","root","","empower_fund");
           // for verfing email 
           $sql="SELECT * FROM login_reg WHERE Email='$email'";                                                                                                                                
           $result=mysqli_query($cn,$sql);
           $rowcount=mysqli_num_rows($result);
           if ($rowcount>0) {
                array_push($erro,"Email is already exists !");
           }
           
           if(count($erro)>0){
            
            foreach($erro as $erro)
                echo"<div class='alert alert-danger'>$erro</div>";
           }else{
            
             $sql="INSERT INTO login_reg  (Name,Email,password) VALUES (?,?,?)";
             $stmt =mysqli_stmt_init($cn);
             $prepare=mysqli_stmt_prepare($stmt,$sql);
             if ($prepare) {
                mysqli_stmt_bind_param($stmt,"sss",$Uname,$email,$pass);
                mysqli_stmt_execute($stmt);
               
                // echo "<div class ='alert aler-sucess'>Success.</div>";
                echo "<script>alert('Registration successful');</script>";
                header("location:login.php");
             }else{
                
                die("something went wrong");
             }
            }


         
        }
        ?>
       


        <h1>Sign Up</h1>
        <form action="signup.php" method="post">
            <input type="text" placeholder="UserName" name="uname">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="pass">
            <input type="password" placeholder="Re-Enter " name="cpass">
            <input type="submit" name="submit" value="Register" class="sub_button"> 
        </form>
        <div class="terms">
            <input type="checkbox" id="checkbox">
            <label for="checkbox" >I agress to these <a href="#">Terms and Conditions</a></label>
        </div>
        
        <div class="member">
            Already a member?<a href="login.php">Login here</a>
        </div>
    </div>
    
</body>
</html>