<?php
if(isset($_POST['submit'])){
    $name=$_POST['fullName'];
    $mobile_no= $_POST['mobile'];
    $email= $_POST['email'];
    $amount=$_POST['amount'];

    $cn= mysqli_connect("localhost", "root", "", "empower_fund");
    $sql="INSERT INTO donation_amt(name,mobile_no,email,amount) VALUES (?,?,?,?)";
    $stmt= mysqli_stmt_init($cn);
    $prepare=mysqli_stmt_prepare($stmt,$sql);
    if($prepare){
        mysqli_stmt_bind_param($stmt,"sisi",$name,$mobile_no,$email,$amount);
        mysqli_stmt_execute($stmt);
        header("location:../thanks.html");
    }
    else{
        die("something went wrong");
    }
}


?>